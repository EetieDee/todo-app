<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\Interfaces\TaskServiceInterface;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected TaskServiceInterface $taskService;

    public function __construct(TaskServiceInterface $taskService)
    {
        $this->taskService = $taskService;
    }

    public function store(Request $request)
    {
        $task = $this->taskService->createTask($request->all());
        return response()->json($task, 201);
    }

    public function update(Request $request, Task $task)
    {
        $task = $this->taskService->updateTask($task, $request->all());
        return response()->json($task, 200);
    }
}
