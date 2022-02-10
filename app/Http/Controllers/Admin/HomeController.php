<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\application;
use App\Models\news;
use App\Models\Project;
use App\Models\projects;
use App\Models\report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $news_count = news::all()->count();
        $projects_count = Project::all()->count();
        $reports_count = report::all()->count();
        $applications_count = application::all()->count();
        return view('admin.home.index',[
            'news_count' => $news_count,
            'projects_count' => $projects_count,
            'reports_count' => $reports_count,
            'applications_count' => $applications_count
        ]);
    }

}
