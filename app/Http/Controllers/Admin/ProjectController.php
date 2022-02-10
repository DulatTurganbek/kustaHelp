<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at','desc')->get();
        return view('admin.project.index',[
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();


        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $name = time().'.'.$ext;
        $path = Storage::disk('public')->putFileAs('projects', $file, $name);
        $link = asset('storage').'/'.$path;

        $file1 = $request->file('inner_image');
        $ext1 = $file1->getClientOriginalExtension();
        $name1= time().'.'.$ext1;
        $path1 = Storage::disk('public')->putFileAs('projects', $file1, $name1);
        $link1 = asset('storage').'/'.$path1;

        $project ->title = $request->title;
        $project ->description = $request->description;
        $project ->content = $request->get('content');
        $project ->image = $link;
        $project ->inner_image = $link1;
        $project ->slug = $request->slug;
        $project ->save();

        return redirect()->back()->withSuccess('Успешно сохранена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.project.show',[
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit',[
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project ->title = $request->title;
        $project ->description = $request->description;
        $project ->content = $request->get('content');
        $project ->image = $request->image;
        $project ->inner_image = $request->inner_image;
        $project ->slug = $request->slug;
        $project ->save();
        return redirect()->back()->withSuccess('Успешно сохранена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->withSuccess('Данные были успешно удалены');
    }
}
