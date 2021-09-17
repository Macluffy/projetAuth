<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FenetreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fenetres')->insert([
            [
                "btn1"=>"Log Cabin",
                "img"=>"portfolio/cabin.png",
                "btn2"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.",
                "btn3"=>"Close Window",

            ],
            [
                "btn1"=>"Tasty Cake",
                "img"=>"portfolio/cake.png",
                "btn2"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.",
                "btn3"=>"Close Window",

            ],
            [
                "btn1"=>"Circus Tent",
                "img"=>"portfolio/circus.png",
                "btn2"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.",
                "btn3"=>"Close Window",

            ],
            [
                "btn1"=>"Controller",
                "img"=>"portfolio/game.png",
                "btn2"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.",
                "btn3"=>"Close Window",

            ],
            [
                "btn1"=>"Locked Safe",
                "img"=>"portfolio/safe.png",
                "btn2"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.",
                "btn3"=>"Close Window",

            ],
            [
                "btn1"=>"Submarine",
                "img"=>"portfolio/submarine.png",
                "btn2"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.",
                "btn3"=>"Close Window",

            ],
        ]); 
    }
}
