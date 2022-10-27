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
        $user = new User();
        $user->name = 'RACHETH';
        $user->email = 'racheth@alu.uabcs.mx';
        $user->password = 'password';
        $user->save();

        $user = new User();
        $user->name = 'suzii';
        $user->email = 'suzzi@alu.uabcs.mx';
        $user->password = 'password1';
        $user->save();
    }
}