<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            'name'     => 'Admin',
            'email'    => 'aa@aa.aa',
            'password' => bcrypt('aaaa'),
        ]);
 
        //$user->roles()->attach(1);
    }
}
