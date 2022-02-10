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
}
