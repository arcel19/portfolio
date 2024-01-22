<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        return view('pages.projet', compact('projets'));
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
    public function store(StoreProjetRequest $request)
    {
        $projet = Projet::create([
            'name'=> $request->name,
            'descritpion'=> $request->descritpion,
            'lien'=> $request->lien,
        ]);
        if($request->file('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $ext = $request->file('photo')->extension();
            $content = file_get_contents($request->file('photo'));
            $filename = str::random(10);
            $path = "projetPhoto/.$filename.$ext";
            storage::disk('public')->put($path,$content);
            $projet->update([
                'photo' =>$path
            ]);
        }

        return to_route('projet.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjetRequest $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        $projet->delete();
        return to_route('projet.index');
    }
}
