<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techonologies = ['HTML', 'Css', 'Bootstrap', 'Sass', 'Javascript', 'Vue', 'PHP', 'SQL', 'Laravel'];

        foreach ($techonologies as $techonology_name) {
            $techonology =  new Technology();

            $techonology->name = $techonology_name;

            $techonology->save();
        }
    }
}