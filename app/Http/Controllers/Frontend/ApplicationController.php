<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\App;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request){
        $application = new App();
        $application->name =$request->name;
        $application->phone =$request->phone;
        $application->save();
        return redirect()->back();

    }

    public function index(){
        $apps = App::orderBy('created_at','desc')->get();
        return view('admin.application.index',[
            'apps' => $apps
        ]);


    }

    public function destroy(App $app){
        $app->delete();
        return redirect()->back()->withSuccess('Данные были успешно удалены');
    }

}
