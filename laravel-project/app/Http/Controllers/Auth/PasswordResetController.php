<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        Mail::raw('パスワードリセットリンクはこちらです: [リンク]', function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('パスワードリセット');
        });

        return view('passwordResetSent');
    }
}
