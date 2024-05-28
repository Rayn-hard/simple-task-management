<?php

namespace Database\Seeders;

use App\Enums\TaskStatusEnum;
use App\Models\User;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $userTest = User::factory()->create([
            'name'      => 'Raynhard Yray',
            'email'     => 'raynhardyray@email.com',
            'password'  => 'raynhard',
        ]);


        $taskTest = Task::factory()->create([
            'user_id'       => $userTest->id,
            'title'         => "Today's Task",
            'description'   => 'these are my task for the day',
            'due_date'      => now()->addDays(2),
            'status'        => TaskStatusEnum::Pending,
        ]);
    }
}
