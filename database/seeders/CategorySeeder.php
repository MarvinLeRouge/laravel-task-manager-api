<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupère le premier user (créé par Breeze)
        $user = User::first();

        $categories = [
            ['name' => 'Travail',   'color' => '#6366f1'],
            ['name' => 'Personnel', 'color' => '#22c55e'],
            ['name' => 'Urgent',    'color' => '#ef4444'],
        ];

        foreach ($categories as $category) {
            Category::create([...$category, 'user_id' => $user->id]);
        }
    }
}
