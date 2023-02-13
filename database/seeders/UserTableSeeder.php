<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'user',
            'email'     =>  'user@user.com',
            'password'  =>  bcrypt('password'),
        ]);

        User::create([
            'name'      => 'user2',
            'email'     =>  'user2@user.com',
            'password'  =>  bcrypt('password'),
        ]);
    }
}
