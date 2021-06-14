<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Juan Carlos Moreno Guerra';
        $user->email = 'jcmg.ing@gmail.com';
        $user->password = bcrypt('123123123');

        User::factory(99)->create();

    }
}
