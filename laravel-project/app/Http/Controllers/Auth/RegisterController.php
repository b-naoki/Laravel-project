<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // バリデーションルール
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 画像のバリデーション
        ]);

        // バリデーションエラーがあれば、元のフォームに戻る
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 画像の保存
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // imagesディレクトリに保存
        }

        // ユーザーの作成
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'image' => $imagePath, // 画像のパスを保存
        ]);

        // ユーザーをログインさせる
        Auth::login($user);

        // マイページにリダイレクト
        return redirect()->route('mypage');
    }
}
