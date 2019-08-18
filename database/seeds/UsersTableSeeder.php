<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'     => 'Andriy',
            'email'    => 'andriy.andriyan1@gmail.com',
            'password' => '12345'
        ]);
    }
}
