<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('admin.about.show',[
            'about' => $about
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit',[
            'about' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\About $about
     * @param $filePath
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {


        $file = $request->file('home_image');
        $ext = $file->getClientOriginalExtension();
        $name = time().'.'.$ext;
        $path = Storage::disk('public')->putFileAs('about', $file, $name);
        $link = asset('storage').'/'.$path;

        $file1 = $request->file('inner_image');
        $ext1 = $file1->getClientOriginalExtension();
        $name1= time().'.'.$ext1;
        $path1 = Storage::disk('public')->putFileAs('about', $file1, $name1);
        $link1 = asset('storage').'/'.$path1;

        $about->description = $request->description;
        $about->first_title = $request->first_title;
        $about->first_content = $request->first_content;
        $about->second_title = $request->second_title;
        $about->second_content = $request->second_content;
        $about->third_title = $request->third_title;
        $about->third_content = $request->third_content;
        $about->home_image = $link;
        $about->inner_image = $link1;
        $about->save();
        return redirect()->back()->withSuccess('Успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
