<?php

// app/Http/Controllers/RegisterController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Userモデルをインポート
use Illuminate\Support\Facades\Hash; // パスワードのハッシュ化用
use Illuminate\Support\Facades\Validator; // バリデーション用

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('laravelRegister'); // 登録フォームのビュー
    }

    public function register(Request $request)
    {
        // 入力値のバリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // 新しいユーザーの作成
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // パスワードをハッシュ化
        ]);

        // 登録後にマイページへリダイレクト
        return redirect('/mypage')->with('success', '登録が完了しました！');
    }
}
