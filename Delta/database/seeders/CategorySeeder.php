<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ruhul',
            'email' => 'ruhul@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
