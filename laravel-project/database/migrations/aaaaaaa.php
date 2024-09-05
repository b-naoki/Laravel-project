<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     // database/migrations/xxxx_xx_xx_create_users_table.php
//     public function up()
//     {
//     Schema::create('users', function (Blueprint $table) {
//         $table->id(); // 自動インクリメントのID
//         $table->string('name'); // 名前
//         $table->string('email')->unique(); // メールアドレス
//         $table->string('password'); // パスワード
//         $table->timestamps(); // 作成日と更新日
//     });
// }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('users');
//     }
// };
