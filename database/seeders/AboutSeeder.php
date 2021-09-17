<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "btn1"=>"fas fa-star",
                "btn2"=>"Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.",
                "btn3"=>"You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!",
                "btn4"=>"Free Download!",
                

            ],
        ]);  
    }
}
