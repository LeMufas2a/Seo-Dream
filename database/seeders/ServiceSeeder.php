<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'titre' => 'Discover What We Do & Offer To Our Clients
            ',
            'image' => 'service-icon-01.png',
            'service' => 'Similar Websites
            ',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.
            ',
        ]);
        DB::table('services')->insert([
            'titre' => 'Discover What We Do & Offer To Our Clients
            ',
            'image' => 'service-icon-02.png',
            'service' => 'Website Trends

            ',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.
            ',
        ]);  DB::table('services')->insert([
            'titre' => 'Discover What We Do & Offer To Our Clients
            ',
            'image' => 'service-icon-03.png',
            'service' => 'Traffic Analysis

            ',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.
            ',
        ]);
        DB::table('services')->insert([
            'titre' => 'Discover What We Do & Offer To Our Clients
            ',
            'image' => 'service-icon-03.png',
            'service' => 'Optimizing Keywords

            ',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.
            ',
        ]);  DB::table('services')->insert([
            'titre' => 'Discover What We Do & Offer To Our Clients
            ',
            'image' => 'service-icon-01.png',
            'service' => 'Page Optimizations

            ',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.
            ',
        ]);  DB::table('services')->insert([
            'titre' => 'Discover What We Do & Offer To Our Clients
            ',
            'image' => 'service-icon-02.png',
            'service' => 'Similar Websites
            ',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.
            ',
        ]);
    }
}
