<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                
                "img"=>"portfolio/cabin.png",
            ],
            [
                
                "img"=>"portfolio/cake.png",
            ],
            [
                
                "img"=>"portfolio/circus.png",
            ],
            [
                
                "img"=>"portfolio/game.png",
            ],
            [
                
                "img"=>"portfolio/safe.png",
            ],
            [
                
                "img"=>"portfolio/submarine.png",
            ],
        ]);
    }
}
