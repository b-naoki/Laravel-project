<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel会員サイト登録画面</title>

</head>
<body>

    <h1>Laravel学習サイト<br>会員ユーザー登録</h1>

    <div class="form-container">
        <form action="{{ url('/register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">ユーザー名:</label>
                <input type="text" id="name" name="name" required value="{{ old('name') }}">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">パスワード確認:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div class="form-group">
                <label for="image">プロフィール画像:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="submit-btn">登録</button>
        </form>

        <div class="buttons button-container">
           <a href="{{ url('/login') }}" class="login-btn">ログイン</a>
           <a href="{{ url('/') }}" class="home-btn">ホームへ戻る</a>
    </div>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #111, #E50027);
            color: #fff;
        }
        h1 {
            margin-bottom: 20px;
            text-align: center;
            line-height: 1.4;
        }
        .form-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            width: 400px;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            font-size: 16px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="file"] {
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            width: 100%;
            box-sizing: border-box;
        }
        .submit-btn {
            padding: 12px 20px;
            background-color: #000;
            color: #E50027;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            transition: background-color 0.3s, color 0.3s;
        }
        .submit-btn:hover {
            background-color: #E50027;
            color: #fff;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }
        .login-btn, .home-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000;
            color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }
        .login-btn:hover, .home-btn:hover {
            background-color: #E50027;
            color: white;
        }
    </style>
</body>
</html>
