<?php

namespace Database\Seeders;
use App\Vservice;
use Illuminate\Database\Seeder;

class VserviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vservice::create([
            'name'      => 'vendor1',
            'email'     =>  'v1@v.com',
            'password'  =>  bcrypt('password'),
        ]);
        Vservice::create([
            'name'      => 'vendor2',
            'email'     =>  'v2@v.com',
            'password'  =>  bcrypt('password'),
        ]);
        Vservice::create([
            'name'      => 'vendor3',
            'email'     =>  'v3@v.com',
            'password'  =>  bcrypt('password'),
        ]);
        Vservice::create([
            'name'      => 'Vservice4',
            'email'     =>  'v4@v.com',
            'password'  =>  bcrypt('password'),
        ]);
        Vservice::create([
            'name'      => 'Vservice5',
            'email'     =>  'v5@v.com',
            'password'  =>  bcrypt('password'),
        ]);
    }
}
