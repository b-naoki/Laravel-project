<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel会員サイトマイページ画面</title>
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
            width: 800px; /* 幅を800pxに変更 */
            height: 600px; /* 高さを600pxに変更 */
            max-width: 90%;
            max-height: 90%;
            overflow-y: auto;
        }
        .user-info {
            margin-bottom: 20px;
        }
        .user-info p {
            margin: 10px 0;
            font-size: 16px;
        }
        .change-email-btn, .change-name-btn {
            padding: 10px 20px;
            background-color: #555; /* ボタンの背景色を設定 */
            color: #fff; /* 文字色を白に設定 */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px; /* 上に余白を追加してボタンを下に移動 */
            transition: background-color 0.3s;
        }
        .change-email-btn:hover, .change-name-btn:hover {
            background-color: #E50027; /* ホバー時の背景を赤に */
            color: #fff;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 200px; /* ボタンを下に移動 */
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
        .profile-image {
           width: 100px; /* 幅を100pxに設定 */
           height: 100px; /* 高さを100pxに設定 */
           border-radius: 50%; /* 丸い形にするためのスタイル */
           margin-bottom: 20px; /* 下のマージンを追加 */
           border: 2px solid #E50027; /* 枠線の色 */
        }
    </style>
</head>
<body>

    <h1>Laravel学習サイト<br>会員マイページ</h1>

    <div class="container">
    <div class="user-info">
        <p>ようこそ、{{ Auth::user()->name }}さん！</p>
        <p>メールアドレス: {{ Auth::user()->email }}</p>

    <button class="change-name-btn" onclick="location.href='{{ url('/change-name') }}'">名前を変更する</button>
    <button class="change-email-btn" onclick="location.href='{{ url('/change-email') }}'">メールアドレスを変更する</button>
    </div>

    <img src="{{ Auth::user()->profile_image }}" alt="プロフィール画像" class="profile-image">
    <div class="button-container">
        <button class="action-btn" onclick="location.href='{{ url('/') }}'">ホームへ戻る</button>
        <button class="action-btn" onclick="location.href='{{ url('/settings') }}'">設定</button>
        <button class="action-btn" onclick="location.href='{{ url('/logout') }}'">ログアウト</button>
    </div>
</div>

</body>
</html>
