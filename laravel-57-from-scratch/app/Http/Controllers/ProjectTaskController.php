<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTaskController extends Controller
{
    
    public function store(Project $project)
    {
        $project->addTask(
            request()->validate(['description' => 'required|max:100'])
        );

        return back();
    }
    
    public function update(Task $task)
    {
        request()->has('completed') ? $task->complete() : $task->incomplete();

        return back();
    }

}
