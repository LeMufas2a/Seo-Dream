<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'statut' => 'Ready Work',
            'prix' => '$720/Month',
            'horaire' => '$450/Meeting',
            'titre' => 'SEO & Digital Marketing Agency',
            'bouton' => 'Get Your Quote',
            'image' => 'banner-right-image.png'
        ]);
    }
}
