<!DOCTYPE html>
<html>
<head>
    <title>Task Reminder</title>
</head>
<body>
<h1>Reminder for Task: {{ $task->title }}</h1>
<p>The task is due on {{ $task->end_date->format('Y-m-d') }} and has not been completed yet.</p>
</body>
</html>
