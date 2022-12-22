<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_create_user()
    {
        $this->artisan('user:create Demo demo@demo.com 123456')->assertExitCode(0);
    }

    public function test_login_user()
    {
        $this->artisan('user:login admin@admin.com 123456')->assertExitCode(0);
    }

}
