<?php

// app/Http/Controllers/TaskController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('order')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:To Do,In Progress,Done',
        ]);
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'order' => Task::max('order') + 1,
        ]);
        return redirect()->back();
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->only('title', 'description', 'status'));
        return redirect()->back();
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back();
    }

    public function reorder(Request $request)
    {
        foreach ($request->order as $index => $id) {
            Task::where('id', $id)->update(['order' => $index]);
        }
        return response()->json(['success' => true]);
    }
}
