<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HeaderSeeder::class,
        ]);
        $this->call([
            PortfolioSeeder::class,
        ]);
        $this->call([
            AboutSeeder::class,
        ]);
        $this->call([
            contactSeeder::class,
        ]);
        $this->call([
            FooterSeeder::class,
        ]);
        $this->call([
            FenetreSeeder::class,
        ]);
        $this->call([
            TitreSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
