<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                
                "titre1"=>"START BOOTSTRAP",
                "titre2"=>"PORTFOLIO",
                "titre3"=>"ABOUT",
                "titre4"=>"CONTACT ME",
            ],
            
        ]);
    }
}
