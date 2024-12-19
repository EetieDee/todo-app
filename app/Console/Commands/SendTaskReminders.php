<?php

namespace App\Console\Commands;

use App\Mail\TaskReminder;
use App\Models\Task;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendTaskReminders extends Command
{
    protected $signature = 'tasks:send-reminders';

    protected $description = 'Send reminders for tasks that are due and not completed';

    public function handle()
    {
        $tasks = Task::where('completed', false)
            ->where('end_date', '<=', now())
            ->get();

        $email = env('TASK_REMINDER_EMAIL');

        foreach ($tasks as $task) {
            Mail::to($email)->send(new TaskReminder($task));
        }

        $this->info('Task reminders sent successfully!');
    }
}
