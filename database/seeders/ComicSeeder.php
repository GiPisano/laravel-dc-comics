<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
        
            $comic = new Comic;
            
            $comic->title = $faker->word();
            $comic->description = $faker->paragraphs(2, true);
            $comic->thumb = $faker->imageUrl(360, 360, 'comic', true);
            $comic->price = $faker->randomFloat(1, 20, 30);
            $comic->series = $faker->words(3, true);
            $comic->sale_date = $faker->date('Y_m_d');
            $comic->type = $faker->text(30);

            $comic->save();
    
        }   
    }
}
