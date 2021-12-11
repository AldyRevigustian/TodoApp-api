<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class StarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        Task::create([
            "title" => 'tes 3',
            "date" => '2021/11/8',
            "hour" => '11:45',
            "priority" => 'high',
            "done" => false,
        ]);
        Task::create([
            "title" => 'tes 2',
            "date" => '2021/12/10',
            "hour" => '11:45',
            "priority" => 'low',
            "done" => false,
        ]);
    }
}
