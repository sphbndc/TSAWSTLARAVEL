<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'joseph',
            'full_name' => 'Joseph',
            'email' => 'joseph@example.com',
        ]);

        $tasks = [
            ['[TECHNICAL] [AI-PROHIBITED] Technical Summative Assessment 3: Module 5 and Module 6', 'pending', today()->toDateString()],
            ['[SW4] ELECTRIC CURRENT AND DC CIRCUIT', 'pending', '2026-11-13'],
            ['[TECHNICAL] [AI-ASSISTED] Technical Formative Assessment 7: Module 7', 'pending', '2026-11-14'],
            ['[TECHNICAL] [AI-ASSISTED] Technical Formative Assessment 8: Module 8', 'pending', '2026-11-21'],
            ['[PROJECT] [AI-PROHIBITED] Final Project', 'pending', '2026-11-27'],
            ['IT0049: Laravel migration practice', 'completed', '2026-11-10'],
            ['GED0083: DC circuit review', 'pending', '2026-11-18'],
            ['IT0049: TSA3 documentation', 'pending', '2026-11-25'],
        ];

        foreach ($tasks as [$title, $status, $date]) {
            Task::create(['title' => $title, 'status' => $status, 'task_date' => $date]);
        }
    }
}
