<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome', [
            'tasks' => Task::whereDate('task_date', today())->orderBy('task_date')->orderBy('id')->get(),
        ]);
    }

    public function tasks()
    {
        return view('pages.tasks', [
            'tasks' => Task::orderBy('task_date')->orderBy('id')->get(),
        ]);
    }

    public function profile()
    {
        return view('pages.profile', ['user' => User::first()]);
    }

    public function about()
    {
        return view('pages.about');
    }
}
