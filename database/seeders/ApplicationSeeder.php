<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objects')->insertOrIgnore([
            [
                'id' => 1,
                'title'=>'Приложение 1'
            ],
            [
                'id' => 2,
                'title'=>'Приложение 2'
            ],
            [
                'id' => 3,
                'title'=>'Приложение 3'
            ],
            [
                'id' => 4,
                'title'=>'Приложение 4'
            ],
            [
                'id' => 5,
                'title'=>'Приложение 5'
            ],
        ], 'id');
    }
}
