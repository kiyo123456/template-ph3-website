<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('choices')->insert([
            // 日本の人口クイズの選択肢
            [
                'question_id' => 1,
                'text' => '約79万人',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'text' => '約1億2千万人',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'text' => '約2億人',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // フランスの首都クイズの選択肢
            [
                'question_id' => 2,
                'text' => 'パリ',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'text' => 'リヨン',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'text' => 'マルセイユ',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
