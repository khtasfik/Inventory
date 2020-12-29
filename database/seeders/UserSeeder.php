<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $userId = Role::whereName('')
        DB::table('users')->insert([
            'name' => 'Kh Tasfik Islam',
            'email' => 'tasfik@gmail.com',
            'password' => bcrypt('tasfik7778'),
            'user_type' => 1,
            'contact' => "01629167778",
            'file' => ".jpg",
            'gender' => "male",
        ]);
    }
}
