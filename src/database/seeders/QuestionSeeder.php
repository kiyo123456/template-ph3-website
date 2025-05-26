<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'quiz_id' => 1,
                'text' => '日本の人口は約何人ですか？',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz_id' => 2,
                'text' => 'フランスの首都は？',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
