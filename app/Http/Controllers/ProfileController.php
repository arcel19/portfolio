<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        // dd($request->all());
        $profile = Profile::create([
            'description'=> $request->description,
            'date_of_birth' =>$request->date_of_birth,
            'address' => $request->address,
            'email' => $request->email,
            'phone'=> $request->phone,
            'zip_code'=> $request->zip_code,
            'facebook' =>$request->facebook,
            'twitter' =>$request->twitter,
            'github'=> $request->github,
            'linkedin'=> $request->linkedin,
            'user_id' => auth()->user()->id,
        ]);
        if($request->file('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $ext = $request->file('photo')->extension();
            $content = file_get_contents($request->file('photo'));
            $filename = str::random(10);
            $path = "ProfilePhoto/.$filename.$ext";
            storage::disk('public')->put($path,$content);
            $profile->update([
                'photo' =>$path
            ]);
        }
        if($request->file('logo')){
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $ext = $request->file('logo')->extension();
            $content = file_get_contents($request->file('logo'));
            $filename = str::random(10);
            $path = "ProfilePhoto/.$filename.$ext";
            storage::disk('public')->put($path,$content);
            $profile->update([
                'logo' =>$path
            ]);
        }

        return to_route('profile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
