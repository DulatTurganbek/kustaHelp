<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\News;
use App\Models\Project;

class PagesController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $about = About::query()->firstOrFail();
        $all_news = News::all();
        $projects = Project::all();
        return view('frontend.home', compact('banners', 'about', 'all_news', 'projects'));
    }

    public function showNews($id)
    {
        $news = News::findOrFail($id);
        return view('frontend.news.show', [
            'news' => $news
        ]);
    }

    public function showProject($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.project.show', [
            'project' => $project
        ]);
    }

}
