<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use PHPUnit\Framework\Attributes\Test;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_registers_a_new_user()
    {
        // テスト用のユーザー情報
        $userData = [
            'name' => 'TestUser',
            'email' => 'testuser@example.com',
            'password' => '11111111',
            'password_confirmation' => '11111111'
        ];

        // POSTリクエストを送信してユーザーを登録
        $response = $this->post('/register', $userData);

        // ユーザーがデータベースに存在することを確認
        $this->assertDatabaseHas('users', [
            'name' => 'TestUser',
            'email' => 'testuser@example.com',
        ]);

        // マイページにリダイレクトされることを確認
        $response->assertRedirect('/mypage');

        // ユーザーがログインしていることを確認
        $this->assertAuthenticated();
    }

    #[Test]
    public function it_validates_user_registration()
    {
        // 不正なデータでPOSTリクエストを送信
        $response = $this->post('/register', [
            'name' => '',
            'email' => 'invalidemail',
            'password' => 'short',
            'password_confirmation' => 'different'
        ]);

        // バリデーションエラーが返されることを確認
        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }
}

