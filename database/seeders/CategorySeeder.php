<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insertOrIgnore([
            [
                'id' => 1,
                'title' => 'Платные',
                'slug' => 'platnie',
                'type' => 'price',
            ],
            [
                'id' => 2,
                'title' => 'Бесплатные',
                'slug' => 'besplatnie',
                'type' => 'price',
            ],
            [
                'id' => 3,
                'title' => 'Android',
                'slug' => 'android',
                'type' => 'system',
            ],
            [
                'id' => 4,
                'title' => 'iOS',
                'slug' => 'ios',
                'type' => 'system',
            ],
        ], 'id');
    }
}
