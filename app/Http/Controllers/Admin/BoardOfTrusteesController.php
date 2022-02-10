<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BoardOfTrustees;
use Illuminate\Http\Request;

class BoardOfTrusteesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boardsOfTrustees = BoardOfTrustees::orderBy('created_at','desc')->get();
        return view('admin.boardOfTrustees.index',[
            'boardsOfTrustees' => $boardsOfTrustees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.boardOfTrustees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_boardOfTrustees = new BoardOfTrustees();
        $new_boardOfTrustees->first_name = $request->first_name;
        $new_boardOfTrustees->last_name = $request->last_name;
        $new_boardOfTrustees->middle_name = $request->middle_name;
        $new_boardOfTrustees->position = $request->position;
        $new_boardOfTrustees->phone = $request->phone;
        $new_boardOfTrustees->telegram = $request->telegram;
        $new_boardOfTrustees->whatsapp = $request->whatsapp;
        $new_boardOfTrustees->whatsapp = $request->whatsapp;

        $new_boardOfTrustees->save();

        return redirect()->back()->withSuccess('Успешно сохранена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BoardOfTrustees  $boardOfTrustees
     * @return \Illuminate\Http\Response
     */
    public function show(BoardOfTrustees $boardOfTrustees)
    {

        return view('admin.boardOfTrustees.show',[
            'boardOfTrustees' => $boardOfTrustees
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BoardOfTrustees  $boardOfTrustees
     * @return \Illuminate\Http\Response
     */
    public function edit(BoardOfTrustees $boardOfTrustees)
    {
        return view('admin.boardOfTrustees.edit',[
            'boardOfTrustees' => $boardOfTrustees
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BoardOfTrustees  $boardOfTrustees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoardOfTrustees $boardOfTrustees)
    {
        $boardOfTrustees = new BoardOfTrustees();
        $boardOfTrustees->first_name = $request->first_name;
        $boardOfTrustees->last_name = $request->last_name;
        $boardOfTrustees->middle_name = $request->middle_name;
        $boardOfTrustees->position = $request->position;
        $boardOfTrustees->phone = $request->phone;
        $boardOfTrustees->telegram = $request->telegram;
        $boardOfTrustees->whatsapp = $request->whatsapp;
        $boardOfTrustees->whatsapp = $request->whatsapp;

        $boardOfTrustees->save();

        return redirect()->back()->withSuccess('Успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BoardOfTrustees  $boardOfTrustees
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoardOfTrustees $boardOfTrustees)
    {
        $boardOfTrustees->delete();
        return redirect()->route('boardOfTrustees.index')->withSuccess('Данные были успешно удалены');
    }
}
