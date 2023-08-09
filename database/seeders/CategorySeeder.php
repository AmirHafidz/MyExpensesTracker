<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Food And Drinks',
            ],
            [
                'category_name' => 'Studies',
            ],
            [
                'category_name' => 'Works',
            ],
            [
                'category_name' => 'Personal Care',
            ],
            [
                'category_name' => 'Transportation',
            ],
            [
                'category_name' => 'Essential Bills',
            ],
            [
                'category_name' => 'Sports/Gaming',
            ],
            [
                'category_name' => 'Others',
            ],
        ]);
    }
}
