<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetController extends Controller
{
    public function sendResetLink(Request $request)
    {
        // リクエストに含まれるメールアドレスのバリデーション
        $request->validate(['email' => 'required|email']);

        // パスワードリセットリンクを送信
        $status = Password::sendResetLink($request->only('email'));

        // リセットリンクが正常に送信された場合の処理
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }
}
