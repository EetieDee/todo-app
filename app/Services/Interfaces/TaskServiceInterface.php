<?php

namespace App\Services\Interfaces;

use App\Models\Task;

interface TaskServiceInterface
{
    public function createTask(array $data): Task;
    public function updateTask(Task $task, array $data): Task;
}
