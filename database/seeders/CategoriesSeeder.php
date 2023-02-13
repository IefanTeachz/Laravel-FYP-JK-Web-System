<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_seeds = [
            ['id'=>'1','services'=>'Bridal dias'],
            ['id'=>'2','services'=>'Makeup Service'],
            ['id'=>'3','services'=>'Photographer'],
            ['id'=>'4','services'=>'Deejay'],
            ['id'=>'5','services'=>'Band'],
            ['id'=>'6','services'=>'Wedding Buffet'],
            ['id'=>'7','services'=>'Wedding Venue'],
            ['id'=>'8','services'=>'Wedding Planner'],
            ['id'=>'9','services'=>'Full Wedding'],
            ['id'=>'10','services'=>'Wedding Cake'],
            ];
            
            foreach ($categories_seeds as $categories_seeds)
            {
                Category ::firstOrCreate($categories_seeds);
            }
    }
}
