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
            'image'=> 'about-left-image.png',
            'titre' => ' Top Marketing Agency & Consult Your Website With Us
            ',
            'phrase1' => 'Projects Finished
            ',
            'phrase2' => 'Happy Clients
            ',
            'phrase3' => 'Awards',
            'description' => 'SEO Dream is free digital marketing CSS template provided by TemplateMo website. You are allowed to use this template for your business websites. Please DO NOT redistribute this template ZIP file on any Free CSS collection websites. You may contact us for more information. Thank you.

            ',
            'bouton' => 'Discover Company '
        ]);
    }
}
