
## Todo App

With Todo App, you can create, read, update, and delete tasks. You can also mark a task as completed. 
With the scheduler included, the app will send reminders to the user's email address when a task is due.

## Installation

Requirements:
- Be sure you have Docker and Docker Compose installed

1. Clone the repository
2. Make a clone of .env.example and rename it to .env.


    DB_CONNECTION=sqlite
    DB_DATABASE=database/database.sqlite
    NOVA_USERNAME=
    NOVA_LICENSE_KEY=
    TASK_REMINDER_EMAIL=user@example.com
3. Run `composer install`
3. Run `docker-compose up -d`




## Usage

1. Access the application at `http://localhost:8001/nova/login`
2. Log in with the following credentials:
    - Username: `test@test.com`
    - Password: `abcdefgh`

