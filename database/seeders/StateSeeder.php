<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state_seeds = [
            ['id'=>'1','state'=>'Selangor'],
            ['id'=>'2','state'=>'Negeri Sembilan'],
            ['id'=>'3','state'=>'Melaka'],
            ['id'=>'4','state'=>'Johor'],
            ['id'=>'5','state'=>'Perlis'],
            ['id'=>'6','state'=>'Kelantan'],
            ['id'=>'7','state'=>'Pulau Pinang'],
            ['id'=>'8','state'=>'Pahang'],
            ['id'=>'9','state'=>'Terengganu'],
            ['id'=>'10','state'=>'Kedah'],
            ['id'=>'11','state'=>'Perak'],
            ['id'=>'12','state'=>'Sabah'],
            ['id'=>'13','state'=>'Sarawak'],
            ];
            
            foreach ($state_seeds as $state_seeds)
            {
                State ::firstOrCreate($state_seeds);
            }
    }
}
