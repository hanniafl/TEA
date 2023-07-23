<?php

namespace Database\Seeders;

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
        //
       $user= User::create([
            'name' => 'Administrador TEA',
            'email' => 'admin.TEA@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        //metodo por permissions
        $user->assignRole('Admin');
        User::factory(99)->create();
    }
}
