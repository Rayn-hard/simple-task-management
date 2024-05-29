<?php

namespace App\Http\Controllers;

use App\Enums\TaskStatusEnum;
use App\Http\Requests\UpsertTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(5);
        return view('dashboard', compact('tasks'));
    }

    public function create(UpsertTaskRequest $request) 
    {
        Task::create($request->validated()->all());

        return redirect()->route('dashboard');
    }

    public function update(UpsertTaskRequest $request, $id)
    {
        $task = Task::find($id);

        $task->update($request->validated()->all());

        return redirect()->route('dashboard');
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return redirect()->route('dashboard');
    }
}
