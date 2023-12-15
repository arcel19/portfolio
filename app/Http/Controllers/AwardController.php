<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Http\Requests\StoreAwardRequest;
use App\Http\Requests\UpdateAwardRequest;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = Award::all();
        return view('pages.award', compact('awards'));
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
    public function store(StoreAwardRequest $request)
    {
        $awards = Award::create([
            'client' => $request->client,
            'jobs' => $request->jobs,
            'win'=> $request->win,
            'design'=> $request->design,
        ]);

        return to_route('award.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award $award)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAwardRequest $request, Award $award)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award $award)
    {
        $award->delete();
        return to_route('award.index');
    }
}
