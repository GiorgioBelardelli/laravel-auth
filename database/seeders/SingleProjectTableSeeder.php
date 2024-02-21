<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\SingleProject;

class SingleProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all containers (you might adjust this based on your actual logic)
        $projects = Project::all();

        // Loop through projects and add SingleProjects
        $projects->each(function ($project) {
            // Create a SingleProject item for each project
            SingleProject::factory() ->count(3) -> create([
                'projects_id' => $project->id,
            ]);
           
        });
    }
}
