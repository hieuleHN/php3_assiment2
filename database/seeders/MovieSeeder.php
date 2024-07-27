<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::Create();

        for($i=0;$i<50;$i++){
        DB::table('movies')->insert([
                'title'=> $faker->text(25),
                'poster'=>"poster/aqHpxQrXN64ogAjyQ1r0zfk43fHZJYGecrMaOiTy.jpg",
                'intro'=>$faker->text('50'),
                'release_date'=>$faker->date("2024-08-13"),
                'genre_id'=>rand(1,4)
            ]);
        }
    }
}
