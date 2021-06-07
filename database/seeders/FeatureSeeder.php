<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            'numero' => '01',
            'icone' => 'first-feature',
            'titre' => 'Reach Out',
            'description' => 'This HTML5 template is based on Bootstrap 5 CSS. You are free to customize anything.',
            'pourcentage' => '80%',
            'langage' => 'HTML/CSS/JS'
        ]);
        DB::table('features')->insert([
            'numero' => '02',
            'icone' => 'second-feature',
            'titre' => 'Develop a Strategy',
            'description' => 'Lorem ipsum dolor sit ameter consectetur adipiscing li elit sed do eiusmod.',
            'pourcentage' => '60%',
            'langage' => 'WORDPRESS'
        ]);
        DB::table('features')->insert([
            'numero' => '03',
            'icone' => 'first-feature',
            'titre' => 'Implementation ',
            'description' => 'If this template is useful for your website, please consider to support us a little.',
            'pourcentage' => '90%',
            'langage' => 'MARKETING'
        ]);
        DB::table('features')->insert([
            'numero' => '04',
            'icone' => 'second-feature',
            'titre' => 'Analyze the result',
            'description' => 'Below circular progress bar animation supports those CSS values 10, 20, 30, till 100.',
            'pourcentage' => '70%',
            'langage' => 'PHOTOSHOP'
        ]);
    }
}
