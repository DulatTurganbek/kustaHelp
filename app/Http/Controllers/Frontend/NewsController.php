<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(){
        $news = News::all();
        return view('frontend.news.show', compact('news',));
    }
}
