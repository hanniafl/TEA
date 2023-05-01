<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => 'Nivel basico'
        ]);

        Level::create([
            'name' => 'Nivel intermedio'
        ]);

        Level::create([
            'name' => 'Nivel avanzado'
        ]);
    }
}
