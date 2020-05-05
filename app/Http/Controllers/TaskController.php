<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome', [
            'tasks' => auth()->user()->tasks
        ]);
    }

    public function add()
    {
        $data = request()->validate([
            'title' => 'required',
        ]);

        $task = new Task($data);
        $task->user_id = auth()->user()->id;
        if ($task->save()) {
            return redirect()->back()->with('success', 'The task is saved now');
        } else {
            return redirect()->back()->with('error', 'The task is not saved');
        }
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);
        if ($task->delete()) {
            return redirect()->route('default')->with('success', 'The task is deleted now');
        } else {
            return redirect()->route('default')->with('error', 'The task is not deleted');
        }
    }


    public function edit($id)
    {
        $data = request()->validate([
            'title' => 'required',
        ]);

        $task = Task::findOrFail($id);
        if ($task->save()) {
            return redirect()->back()->with('success', 'The task is saved now');
        } else {
            return redirect()->back()->with('error', 'The task is not saved');
        }
    }
}
