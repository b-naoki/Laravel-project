<?php

// データベースの設定をここに記述します
$host = 'db'; // ホスト名
$db   = 'laravel'; // データベース名
$user = 'root'; // ユーザー名
$pass = 'password'; // パスワード
$charset = 'utf8mb4'; // 文字セット

// root@b6b24271fa93:/var/www# ls
// README.md  docker  docker-compose.yml  laravel-project
// root@b6b24271fa93:/var/www# cd laravel-project/
// root@b6b24271fa93:/var/www/laravel-project# ls
// README.md  bootstrap      config        pdo_test.php  resources  tests
// app        composer.json  database      phpunit.xml   routes     vendor
// artisan    composer.lock  package.json  public        storage    vite.config.js
// root@b6b24271fa93:/var/www/laravel-project# php pdo_test.php
// 接続成功
// root@b6b24271fa93:/var/www/laravel-project#
// DB_CONNECTION=mysql
// DB_HOST=db
// # DB_HOST=localhost
// DB_PORT=3306
// DB_DATABASE=laravel
// DB_USERNAME=root
// DB_PASSWORD=password

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "接続成功\n";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
