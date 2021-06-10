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
            'image' => 'contact-icon-01.png',
            'contact' => 'info@company.com',

        ]);
        DB::table('contacts')->insert([
            'image' => 'contact-icon-02.png',
            'contact' => '+001-002-0034',

        ]);
        DB::table('contacts')->insert([
            'image' => 'contact-icon-03.png',
            'contact' => '26th Street, Digital Villa',

        ]);
    }
}
