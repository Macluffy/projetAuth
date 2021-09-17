<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                "btn1"=>"Location",
                "btn2"=>"Location",
                "btn3"=>"Clark, MO 65243",
                "btn4"=>"Around the Web",
                "btn5"=>"About Freelancer",
                "btn6"=>"Freelance is a free to use, MIT licensed Bootstrap theme created by",
                "btn7"=>"Start Bootstrap",
                "btn8"=>"Copyright",
                "btn9"=>"Your Website 2021",

            ],
        ]);   
    }
}
