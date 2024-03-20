<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('pages.service', compact('services'));
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
    public function store(StoreServiceRequest $request)
    {
        $service = Service::create([
            'name'=> $request->name,
            'description' => $request->description,
            'photo' => $request->photo,
        ]);

        // if($request->file('photo')){
        //     $request->validate([
        //         'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        //     $ext = $request->file('photo')->extension();
        //     $content = file_get_contents($request->file('photo'));
        //     $filename = str::random(10);
        //     $path = "servicePhoto/.$filename.$ext";
        //     storage::disk('public')->put($path,$content);
        //     $service->update([
        //         'photo' =>$path
        //     ]);
        // }

        return to_route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return to_route('service.index');
    }
}
