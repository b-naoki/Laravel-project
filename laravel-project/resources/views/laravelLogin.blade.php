<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel会員サイト<br>ユーザーログイン</title>
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
            width: 400px; /* フォームの幅を広く設定 */
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
            width: 100%; /* 入力フィールドをフォームの幅に合わせる */
            box-sizing: border-box;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }
        .submit-btn, .register-btn, .home-btn {
            padding: 12px 20px;
            background-color: #000; /* ボタンの背景を黒に設定 */
            color: #E50027; /* ボタンの文字色を赤に設定 */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 100%; /* ボタンもフォームの幅に合わせる */
            transition: background-color 0.3s, color 0.3s; /* ホバー時の効果をスムーズに */
        }
        .submit-btn:hover, .register-btn:hover, .home-btn:hover {
            background-color: #E50027; /* ホバー時の背景を赤に */
            color: #fff; /* ホバー時の文字色を白に */
        }
    </style>
</head>
<body>

    <h1>Laravel会員サイト<br>ユーザーログイン</h1>

    <div class="form-container">
        <form action="{{ url('/login') }}" method="POST">
            @csrf <!-- CSRFトークンを含めることでセキュリティを確保 -->
            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-btn">ログイン</button>
        </form>
        
        <!-- 追加されたボタン -->
        <div class="button-container">
            <button class="register-btn" onclick="location.href='{{ url('/register') }}'">登録</button>
            <button class="home-btn" onclick="location.href='{{ url('/') }}'">ホームへ戻る</button>
        </div>
    </div>

</body>
</html>
