<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                "btn1"=>"Full name",
                "btn2"=>"A name is required.",
                "btn3"=>"Email address",
                "btn4"=>"An email is required.",
                "btn5"=>"Email is not valid.",
                "btn6"=>"Phone number",
                "btn7"=>"A phone number is required.",
                "btn8"=>"Message",
                "btn9"=>"A message is required.",
                "btn10"=>"Form submission successful!",
                "btn11"=>"To activate this form, sign up at",
                "btn12"=>"Error sending message!",
                "btn13"=>"Send",

            ],
        ]); 
    }
}
