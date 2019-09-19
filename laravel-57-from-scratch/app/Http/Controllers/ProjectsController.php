<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use App\Project;


class ProjectsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        // abort_if($project->owner_id !== auth()->id(), 403);
        // abort_unless($project->owner_id == auth()->id(), 403);
        // abort_unless (\Gate::allows('update', $project), 403);
        // abort_if (\Gate::denies('update', $project), 403);
        $this->authorize('update', $project);

        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $this->authorize('update', $project);

        $project->update($this->validateProject());
        
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $this->authorize('update', $project);
        
        $project->delete();

        return redirect('/projects');
    }

    public function store()
    {
        $attributes = $this->validateProject();

        $attributes['owner_id'] = auth()->id();
        
        $project = Project::create($attributes);

        event(new ProjectCreated($project));

        return redirect('/projects');
    }

    protected function validateProject()
    {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);
    }
}
