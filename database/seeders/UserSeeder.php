<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        
        [
            'name' => 'Gosset',
            'firstname' => 'Geoffrey',
            'age' => '28',
            'adress' => '10 place de la minoterie',
            'role_id' => 3,
            'email' => 'geoffrey@gmail.com',
            'password' => Hash::make('geoffrey@gmail.com')
        ],
        [
            'name' => 'Anderson',
            'firstname' => 'Smith',
            'age' => '45',
            'adress' => '11 place de la minoterie',
            'role_id' => 1,
            'email' => 'smith@gmail.com',
            'password' => Hash::make('smith@gmail.com')
        ],
        [
            'name' => 'Washington',
            'firstname' => 'Denzel',
            'age' => '50',
            'adress' => '12 place de la minoterie',
            'role_id' => 1,
            'email' => 'denzel@gmail.com',
            'password' => Hash::make('denzel@gmail.com')
        ],

        ]);
    }
}
