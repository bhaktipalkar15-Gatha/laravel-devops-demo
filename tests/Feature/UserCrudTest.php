<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_crud() {
        $this->post('/users', [
            'name'=>'DevOps',
            'email'=>'devops@test.com',
            'password'=>'secret12'
        ])->assertRedirect('/users');

        $this->assertDatabaseHas('users',['email'=>'devops@test.com']);
    }
}
