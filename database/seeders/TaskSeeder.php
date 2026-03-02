<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $categories = Category::all();

        Task::create([
            'user_id'     => $user->id,
            'category_id' => $categories->where('name', 'Travail')->first()->id,
            'title'       => 'Apprendre Laravel',
            'description' => 'Monter en compétences sur Laravel 11',
            'status'      => 'in_progress',
            'priority'    => 'high',
            'due_date'    => '2026-03-15',
        ]);

        Task::create([
            'user_id'     => $user->id,
            'category_id' => $categories->where('name', 'Personnel')->first()->id,
            'title'       => 'Faire les courses',
            'status'      => 'todo',
            'priority'    => 'low',
        ]);
    }
}
