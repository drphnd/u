<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory()->count(10)->create();

    //     Project::create(
    //         [
    //         'title' => 'Database',
    //         'code' => 'UC-01',
    //         'course' => 'Database'
    //         ]

    // );
        
    }
}
