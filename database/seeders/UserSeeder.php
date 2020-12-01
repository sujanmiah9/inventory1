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
        User::create([
            'name' =>'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'), // password
            'address' => 'Dhaka',
            'contactNumber' => '01679430909',
            'gender' => 'male',
            'status' => 1,
            'photo'=>'upload/5fc3341d9ad9b.png',

        ]);

        User::create([
            'name' =>'Nehal',
            'email' => 'nehal@gmail.com',
            'password' => bcrypt('12345'), // password
            'address' => 'Dhaka',
            'contactNumber' => '01679430909',
            'gender' => 'male',
            'status' => 1,
            'photo'=>'upload/nehal.JPG',

        ]);

        User::create([
            'name' =>'Sujan',
            'email' => 'sujan@gmail.com',
            'password' => bcrypt('12345'), // password
            'address' => 'Dhaka',
            'contactNumber' => '01912280055',
            'gender' => 'male',
            'status' => 1,
            'photo'=>'upload/sujan.jpg',

        ]);

        User::create([
            'name' =>'Rafsan',
            'email' => 'rafsan@gmail.com',
            'password' => bcrypt('12345'), // password
            'address' => 'Dhaka',
            'contactNumber' => '01679430909',
            'gender' => 'male',
            'status' => 1,
            'photo'=>'upload/rakib.jpg',

        ]);

        User::create([
            'name' =>'Roni',
            'email' => 'roni@gmail.com',
            'password' => bcrypt('12345'), // password
            'address' => 'Dhaka',
            'contactNumber' => '01679430909',
            'gender' => 'male',
            'status' => 1,
            'photo'=>'upload/roni.png',

        ]);

        User::create([
            'name' =>'Mubarok',
            'email' => 'mubarok@gmail.com',
            'password' => bcrypt('12345'), // password
            'address' => 'Dhaka',
            'contactNumber' => '01679430909',
            'gender' => 'male',
            'status' => 1,
            'photo'=>'upload/mubarok.png',

        ]);
    }
}
