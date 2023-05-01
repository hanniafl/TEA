<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'José Miguel Valencia Delgadillo',
            'email' => 'miguel_valencia24@hotmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(99)->create();
    }
}
