<?php

namespace App\Http\Controllers;

use App\Http\Resources\TournamentResource;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $tournament = Tournament::create($request);

        return response()->json([
            'message' => 'Турнир добавлен успешно',
            'tournament' => new TournamentResource($tournament)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  Tournament  $tournament
     * @return TournamentResource
     */
    public function show(Tournament $tournament)
    {
        return new TournamentResource($tournament);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return Response
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
