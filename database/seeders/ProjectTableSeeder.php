<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberList = [
            [
                'name'  => 'Giorgio Belardelli',
                'nickname' => 'Gió',
                'description' => 'lorem ipsum',
                'img_path' => "public/img/Gio.jpg",
            ],
            [
                'name'  => 'Domenico Forlano',
                'nickname' => 'Mimmo',
                'description' => 'lorem ipsum',
                'img_path' => "public/img/FotoProfilo.jpeg",
            ],
            [
                'name'  => 'Kaid Gabriele Abu Madegem',
                'nickname' => 'Paglia',
                'description' => 'lorem ipsum',
                'img_path' => "public/img/Sporco.jpg",
            ],
        ];
        
        
        
        foreach($memberList as $member){
            
            Project::factory() -> create($member);
      
        }


    }
}
