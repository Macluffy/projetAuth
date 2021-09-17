<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('headers')->insert([
            [
                "btn1"=>"Start Bootstrap",
                "btn2"=>"Menu",
                "btn3"=>"Bootstrap",
                "btn4"=>"About",
                "btn5"=>"Contact",
                "img1"=>"avataaars.svg",
                "btn6"=>"fas fa-star",
                "btn7"=>"Graphic Artist - Web Designer - Illustrator",

            ],
        ]);    
    }
}