<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel会員サイト<br>マイページ</title>
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
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            width: 400px; /* コンテナの幅を広く設定 */
            text-align: center;
        }
        .user-info {
            margin-bottom: 20px;
        }
        .user-info p {
            margin: 10px 0;
            font-size: 16px;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }
        .action-btn {
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
        .action-btn:hover {
            background-color: #E50027; /* ホバー時の背景を赤に */
            color: #fff; /* ホバー時の文字色を白に */
        }
    </style>
</head>
<body>

    <h1>Laravel会員サイト<br>マイページ</h1>

    <div class="container">
        <div class="user-info">
            <p>ようこそ、{{ Auth::user()->name }}さん！</p>
            <p>メールアドレス: {{ Auth::user()->email }}</p>
        </div>
        
        <!-- ボタンエリア -->
        <div class="button-container">
            <button class="action-btn" onclick="location.href='{{ url('/') }}'">ホームへ戻る</button>
            <button class="action-btn" onclick="location.href='{{ url('/settings') }}'">設定</button>
            <button class="action-btn" onclick="location.href='{{ url('/logout') }}'">ログアウト</button>
        </div>
    </div>

</body>
</html>
