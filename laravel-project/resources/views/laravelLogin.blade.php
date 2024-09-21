<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel会員サイトログイン画面</title>

</head>
<body>

    <h1>Laravel会員サイト<br>会員ユーザーログイン</h1>

    <div class="form-container">
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="forgot-password">
                <a href="{{ url('/password/reset') }}">パスワードを忘れた方はこちら</a>
            </div>

            <button type="submit" class="submit-btn">ログイン</button>
        </form>
        
        <div class="button-container">
          <a href="{{ url('/register') }}" class="register-btn">登録</a>
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
        input {
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            width: 100%;
            box-sizing: border-box;
        }
        .forgot-password {
            text-align: right;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .forgot-password a {
            color: #E50027;
            text-decoration: none;
            font-size: 14px;
        }
        .forgot-password a:hover {
            text-decoration: underline;
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
        .register-btn, .home-btn {
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
        .register-btn:hover, .home-btn:hover {
            background-color: #E50027;
            color: white;
        }
    </style>
</body>
</html>
