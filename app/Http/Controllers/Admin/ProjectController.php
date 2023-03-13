<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $project = new Project();
        $types = Type::all();


        return view('admin.projects.create', compact('project', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['string', 'required', 'unique:projects', 'max:50'],
            'image' => ['file', 'required'],
            'description' => ['string', 'required'],
            'project_link' => ['string', 'required', 'unique:projects',],
            'techonologies_used' => ['string', 'required'],
        ]);

        $data = $request->all();

        $project = new Project();

        if (Arr::exists($data, 'image')) {
            $img_url = Storage::put('projects', $data['image']);
            $data['image'] = $img_url;
        }

        $project->fill($data);

        $project->save();

        return to_route('admin.projects.index')->with('type', 'success')->with('msg', "Il Progetto $project->title è stato creato con successo.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        $types = Type::all();

        return view('admin.projects.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => ['string', 'required', 'max:50'],
            'image' => ['file', 'required'],
            'description' => ['string', 'required'],
            'project_link' => ['string', 'required',],
            'techonologies_used' => ['string', 'required'],
        ]);

        $data = $request->all();

        if (Arr::exists($data, 'image')) {
            if ($project->image) Storage::delete($project->image);
            $img_url = Storage::put('projects', $data['image']);
            $data['image'] = $img_url;
        }

        $project->update($data);

        return redirect()->route('admin.projects.show', $project->id)->with('type', 'warning')->with('msg', "Il Progetto $project->title è stato modificato con successo.");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->image) Storage::delete($project->image);

        $project->delete();

        return to_route('admin.projects.index')->with('type', 'danger')->with('msg', "Il Progetto $project->title è stato eliminato con successo.");
    }
}
