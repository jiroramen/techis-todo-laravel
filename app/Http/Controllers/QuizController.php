<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

use App\Models\Company;
use App\Models\Sale;

class QuizController extends Controller
{
    public function index()
    {
        return view('question.quiz2');
    }

    public function show()
    {
        $quizzes = Quiz::get();
        return view('question.quiz3', compact('quizzes'));
    }

    public function quiz4_show()
    {
        $fruits = "orange";
        return view('question.quiz4', compact('fruits'));
    }

    public function login(Request $request)
    {
        // セッションの削除
        $request->session()->flush();
        // ログインユーザーの設定
        $user_info = array(
            'email' => 'techis@test',
            'password' => '1234'
        );
        // ログインチェック
        if (Auth::attempt($user_info)) {
            // ログインに成功
            return view('question.quiz5');
        }

        // ログインに失敗
        // ※今回は学習のためどちらのパターンでもquiz5に画面遷移させる
        return view('question.quiz5');
    }
    public function quiz6_show()
    {
        $quizzes = Quiz::all();
        return view('question.quiz6', compact('quizzes'));
    }

    public function quiz7_show()
    {   // first()で、抽出対象データのうち初めの1件のみを取得
        $quiz = Quiz::first();
        return view('question.quiz7', compact('quiz'));
    }

    public function quiz8_redirect()
    {
        return redirect('/quiz7');
    }

    public function quiz9_show($id)
    {
        $quizzes = Quiz::find($id);
        return view('question.quiz9', compact('quizzes'));
    }

    public function quiz10_show()
    {
        return view('question.quiz10');
    }

    public function quiz10_store(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'name' => 'required|string|max:30', // 名前：必須・最大30文字
            'type' => 'required|string',        // 種別・必須
        ]);

        // DB登録(createを使う)
        Quiz::create($validated);

        // 登録後はクイズ登録画面にリダイレクト
        return redirect()->route('quiz10_test')->with('success','クイズを登録しました。');
    }

    public function quiz11_show_all()
    {
        // テーブルの全件取得
        $companies = company::all();
        $sales = sale::all();

        // view に渡す（quiz11.blade.php を resources/views 配下におく）
        return view('question.quiz11', compact('companies','sales'));
    }
}
