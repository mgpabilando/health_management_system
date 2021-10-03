<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('users')->insert([
            'role_id' => '2',
            'fname' => 'John Kenneth',
            'lname' => 'Gerero',
            'age' => '21',
            'contact' => '09121212131',
            'address' => 'somewhere',
            'bdate' => '2000/09/08',
            'email' => 'bhw1@gmail.com',
            'password' => bcrypt('1234567'),
        ]);
    }
}
