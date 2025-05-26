<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quizzes')->insert([
            [
                'title' => '日本の人口クイズ',
                'description' => '日本の人口に関する基本的な問題です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '世界の首都クイズ',
                'description' => '世界各国の首都に関する問題です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
