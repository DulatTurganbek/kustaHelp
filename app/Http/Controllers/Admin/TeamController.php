<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('created_at','desc')->get();
        return view('admin.team.index',[
            'teams' => $teams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_team = new Team();
        $new_team->first_name = $request->first_name;
        $new_team->last_name = $request->last_name;
        $new_team->middle_name = $request->middle_name;
        $new_team->position = $request->position;
        $new_team->phone = $request->phone;
        $new_team->telegram = $request->telegram;
        $new_team->whatsapp = $request->whatsapp;
        $new_team->whatsapp = $request->whatsapp;

        $new_team->save();

        return redirect()->back()->withSuccess('Успешно сохранена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.team.show',[
            'team' => $team
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit',[
            'team' => $team
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->first_name = $request->first_name;
        $team->last_name = $request->last_name;
        $team->middle_name = $request->middle_name;
        $team->position = $request->position;
        $team->phone = $request->phone;
        $team->telegram = $request->telegram;
        $team->whatsapp = $request->whatsapp;
        $team->save();
        return redirect()->back()->withSuccess('Успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->withSuccess('Данные были успешно удалены');

    }
}
