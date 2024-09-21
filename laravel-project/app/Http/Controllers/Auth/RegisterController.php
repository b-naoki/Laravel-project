<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // バリデーションルール
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // バリデーションエラーがあれば、元のフォームに戻る
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ユーザーの作成
        // Userがモデルのクラス名で、createメソッドはレコードを作成するLaravelの標準メソッド
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // ユーザーをログインさせる
        Auth::login($user);

        // マイページにリダイレクト
        return redirect()->route('mypage');
    }
}
