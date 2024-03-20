<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::all();
        return view('pages.site', compact('sites'));
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
    public function store(StoreSiteRequest $request)
    {
        $site = Site::create([
            'service_description' =>$request->service,
            'blog_description' =>$request->blog,
            'contact_description' =>$request->cantact,
            'projet_description' =>$request->projet,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'office' =>$request->office,
            'map' =>$request->map,
            'website'=> $request->website,
        ]);

        if ($request->file('logo')) {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $ext = $request->file('logo')->extension();
            $content = file_get_contents($request->file('logo'));
            $filename = str::random(10);
            $path = "SiteLogo/.$filename.$ext";
            storage::disk('public')->put($path, $content);
            $site->update([
                'logo' => $path
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteRequest $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }
}
