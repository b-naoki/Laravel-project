<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Membership Site</title>
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
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .logo {
            margin-bottom: 20px;
        }
        .buttons {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .register-btn, .login-btn {
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
        .register-btn:hover, .login-btn:hover {
            background-color: #E50027;
            color: white;
        }
    </style>
</head>
<body>

    <div class="logo">
        <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" width="200">
    </div>

    <h1>Laravel学習会員サイト</h1>
    <div class="buttons button-container">
       <a href="{{ url('/login') }}" class="login-btn">ログイン</a>
       <a href="{{ url('/register') }}" class="register-btn">登録</a>
    </div>
</body>
</html>
