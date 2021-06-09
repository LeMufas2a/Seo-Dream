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
            'titre' => 'Awesome Project 101',
            'image' => 'portfolio-01.jpg',
            'profession' => 'Marketing',
        ]);
        DB::table('portfolios')->insert([
            'titre' => 'Awesome Project 102',
            'image' => 'portfolio-04.jpg',
            'profession' => 'Branding',
        ]);
        DB::table('portfolios')->insert([
            'titre' => 'Awesome Project 103',
            'image' => 'portfolio-02.jpg',
            'profession' => 'Consulting',
        ]);
        DB::table('portfolios')->insert([
            'titre' => 'Awesome Project 104',
            'image' => 'portfolio-05.jpg',
            'profession' => 'Actwork',
        ]);
        DB::table('portfolios')->insert([
            'titre' => 'Awesome Project 105',
            'image' => 'portfolio-03.jpg',
            'profession' => 'Branding',
        ]);
        DB::table('portfolios')->insert([
            'titre' => 'Awesome Project 106',
            'image' => 'portfolio-06.jpg',
            'profession' => 'Artwork',
        ]);
        DB::table('portfolios')->insert([
            'titre' => 'Awesome Project 107',
            'image' => 'portfolio-04.jpg',
            'profession' => 'Creative',
        ]);
        DB::table('portfolios')->insert([
            'titre' => 'Awesome Project 108',
            'image' => 'portfolio-01.jpg',
            'profession' => 'Consulting',
        ]);
    }
}
