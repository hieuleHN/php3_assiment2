<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::Create();

        for($i=0;$i<100;$i++){
        DB::table('books')->insert([
                'title'=> $faker->text(25),
                'thumbnail'=>"https://www.google.com.vn/imgres?q=%E1%BA%A3nh%20s%C3%A1ch&imgurl=https%3A%2F%2Fpng.pngtree.com%2Felement_our%2F20190530%2Fourlarge%2Fpngtree-beautiful-book-cartoon-illustration-image_1245639.jpg&imgrefurl=https%3A%2F%2Fvi.pngtree.com%2Ffreepng%2Fbeautiful-book-cartoon-illustration_4707161.html&docid=aOl0zs_YcAOi_M&tbnid=WF1Q0cCn8OM5yM&vet=12ahUKEwivi5GukbOHAxVIZvUHHTQxBycQM3oECGcQAA..i&w=640&h=640&hcb=2&ved=2ahUKEwivi5GukbOHAxVIZvUHHTQxBycQM3oECGcQAA",
                'author'=>$faker->text('50'),
                'publisher'=>$faker->text('50'),
                'Publication'=>$faker->date("2024-08-13"),
                'Price'=>rand(1,10000),
                'Quantity'=>rand(1,1000),
                'Category_id'=>rand(1,4)
            ]);
        }
    }
}
