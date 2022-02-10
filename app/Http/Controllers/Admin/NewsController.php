<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_news = News::orderBy('created_at','desc')->get();
        return view('admin.news.index',[
            'all_news' => $all_news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $name = time().'.'.$ext;
        $path = Storage::disk('public')->putFileAs('news', $file, $name);
        $link = asset('storage').'/'.$path;

        $file1 = $request->file('inner_image');
        $ext1 = $file1->getClientOriginalExtension();
        $name1= time().'.'.$ext1;
        $path1 = Storage::disk('public')->putFileAs('news', $file1, $name1);
        $link1 = asset('storage').'/'.$path1;

        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->get('content');
        $news->date = $request->date;
        $news->image = $link;
        $news->inner_image = $link1;
        $news->slug = $request->slug;
        $news->save();
        return redirect()->back()->withSuccess('Успешно сохранена');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show',[
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',[
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $name = time().'.'.$ext;
        $path = Storage::disk('public')->putFileAs('news', $file, $name);
        $link = asset('storage').'/'.$path;

        $file1 = $request->file('inner_image');
        $ext1 = $file1->getClientOriginalExtension();
        $name1= time().'.'.$ext1;
        $path1 = Storage::disk('public')->putFileAs('news', $file1, $name1);
        $link1 = asset('storage').'/'.$path1;

        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->get('content');
        $news->date = $request->date;
        $news->image = $link;
        $news->inner_image = $link1;
        $news->slug = $link1;
        $news->save();
        return redirect()->back()->withSuccess('Успешно обновлена');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->withSuccess('Данные были успешно удалены');
    }
}
