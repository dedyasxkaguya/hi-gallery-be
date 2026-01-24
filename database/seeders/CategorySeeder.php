<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = ['anime', 'painting', 'digital', 'nature', 'character', 'random', 'other'];
        foreach ($datas as $data) {
            DB::table('categories')->insert([
                'name' => $data,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
