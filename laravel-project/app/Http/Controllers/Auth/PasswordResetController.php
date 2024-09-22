<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    public function sendResetLink(Request $request)
    {
        // バリデーション
        $request->validate(['email' => 'required|email']);

        // メール送信処理
        Mail::raw('パスワードリセットリンクはこちらです: [リンク]', function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('パスワードリセット');
        });

        // リダイレクト
        return view('passwordResetSent'); // 送信完了画面のビュー
    }
}
