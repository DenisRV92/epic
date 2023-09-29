<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('object_category')->insertOrIgnore([
            [
                'id' => 1,
                'object_id' => 1,
                'category_id' => 1,
            ],
            [
                'id' => 2,
                'object_id' => 1,
                'category_id' => 3,
            ],
            [
                'id' => 3,
                'object_id' => 2,
                'category_id' => 2,
            ],
            [
                'id' => 4,
                'object_id' => 2,
                'category_id' => 3,
            ],
            [
                'id' => 4,
                'object_id' => 2,
                'category_id' => 3,
            ],
            [
                'id' => 5,
                'object_id' => 3,
                'category_id' => 1,
            ],
            [
                'id' => 6,
                'object_id' => 3,
                'category_id' => 4,
            ],
            [
                'id' => 7,
                'object_id' => 4,
                'category_id' => 2,
            ],
            [
                'id' => 8,
                'object_id' => 4,
                'category_id' => 4,
            ],
            [
                'id' => 9,
                'object_id' => 5,
                'category_id' => 1,
            ],
            [
                'id' => 10,
                'object_id' => 5,
                'category_id' => 3,
            ],
            [
                'id' => 11,
                'object_id' => 5,
                'category_id' => 4,
            ],
        ], 'id');
    }
}
