<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($id)
    {
        $quiz = Quiz::findOrFail($id);  // クイズを取得、存在しない場合は404
        return view('quizzes.show', compact('quiz'));  // ビューにデータを渡す
    }
}
