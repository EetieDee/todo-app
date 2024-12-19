<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_task_can_be_created()
    {
        $response = $this->post('/api/v1/tasks', [
            'title' => 'Test Task',
            'start_date' => '2024-12-01',
            'end_date' => '2024-12-31',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', ['title' => 'Test Task']);
    }

    public function test_task_can_be_completed()
    {
        $task = Task::factory()->create(['completed' => false]);

        $response = $this->put("/api/v1/tasks/{$task->id}", [
            'completed' => true,
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('tasks', ['id' => $task->id, 'completed' => true]);
    }
}
