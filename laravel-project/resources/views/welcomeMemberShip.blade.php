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
            background: linear-gradient(to right, #111, #E50027); /* 黒から赤のグラデーション */
            color: #fff; /* 文字色を白に設定 */
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
        .login-btn {
            background-color: #000; /* ボタンの背景を黒に設定 */
            color: #E50027; /* ボタンの文字色を赤に設定 */
        }
        .register-btn {
            background-color: #000; /* ボタンの背景を黒に設定 */
            color: #E50027; /* ボタンの文字色を赤に設定 */
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>

    <!-- Laravelロゴ -->
    <div class="logo">
        <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" width="200">
    </div>

    <h1>Welcome to the Membership Site</h1>
    <div class="buttons button-container">
        <button class="register-btn" onclick="location.href='{{ url('/login') }}'">ログイン</button>
        <button class="register-btn" onclick="location.href='{{ url('/register') }}'">登録</button>

    </div>

</body>
</html>
