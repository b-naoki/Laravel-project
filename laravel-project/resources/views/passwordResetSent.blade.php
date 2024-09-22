<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワードリセットリンク送信完了</title>
</head>
<body>

    <h1>パスワードリセットリンク送信完了</h1>

    <div class="message-container">
        <p>パスワードリセットリンクを、指定したメールアドレスに送信しました。</p>
        <p>メールをご確認ください。</p>
    </div>

    <div class="back-to-login">
        <a href="{{ url('/login') }}" class="login-link">ログイン画面に戻る</a>
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
        .login-link {
            color: #E50027;
            text-decoration: none;
            font-size: 18px;
        }
        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</body>
</html>
