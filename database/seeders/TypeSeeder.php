<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $types = ['FrontEnd', 'BackEnd', 'FullStack'];

        foreach ($types as $type_name) {
            $type = new Type();
            $type->name = $type_name;
            $type->save();
        }
        
    }
}
