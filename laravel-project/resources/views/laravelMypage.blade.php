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
            background: linear-gradient(to right, #111, #E50027);
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
            width: 800px;
            height: 600px;
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
        .change-email-btn:hover, .change-name-btn:hover {
            background-color: #E50027;
            color: white;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 250px;
        }
        .logout-btn, .home-btn, .settings-btn {
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
        .logout-btn:hover, .home-btn:hover, .settings-btn:hover {
            background-color: #E50027;
            color: white;
        }
        .profile-image {
           width: 100px;
           height: 100px;
           border-radius: 50%;
           margin-bottom: 20px;
           border: 2px solid #E50027;
        }
    </style>
</head>
<body>

    <h1>Laravel学習サイト<br>会員マイページ</h1>

    <div class="container">
    <div class="user-info">
        <p>ようこそ、{{ Auth::user()->name }}さん！</p>
        <p>メールアドレス: {{ Auth::user()->email }}</p>
    <a href="{{ url('/change-name') }}" class="change-name-btn">ホームへ戻る</a>
    <a href="{{ url('/change-email') }}" class="change-email-btn">メールアドレスを変更する</a>
    </div>

    <img src="{{ Auth::user()->profile_image }}" alt="プロフィール画像" class="profile-image">
    <div class="button-container">
        <a href="{{ url('/') }}" class="home-btn">ホームへ戻る</a>
        <a href="{{ url('/settings') }}" class="settings-btn">設定画面</a>
        <a href="{{ url('/logout') }}" class="logout-btn">ログアウト</a>
    </div>
</div>

</body>
</html>