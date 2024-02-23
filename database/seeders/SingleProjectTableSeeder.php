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
       
        $projects = Project::all();

        
        $projects->each(function ($project) {
            SingleProject::factory() ->count(3) -> create([
                'projects_id' => $project->id,
            ]);
           
        });
    }
}
