<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $project = new Project();
            $project->title = $faker->words(3, true); 
            // $project->image = $faker->imageUrl(200, 200);
            $project->description = $faker->paragraphs(10, true);
            $project->techonologies_used = $faker->words(3, true);
            $project->project_link = $faker->url();
            $project->save();
        }
    }
}