<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'title' => 'Bong da',
            'type' => 'sport',
            'author' => 'Tung',
        ]);
    }
}
