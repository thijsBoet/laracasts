<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    public function store(Project $project)
    {
        $project->addTask(
            request()->validate(['description' => 'required'])
        );

        return back();
    }
    public function update(Task $task)
    {
        $task->complete(request()->has('completed'));

        return back();
    }
}
