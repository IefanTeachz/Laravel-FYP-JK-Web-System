<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(VserviceTableSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(GuestTableSeeder::class);
        $this->call(PlanTableSeeder::class);
       
    }
}
