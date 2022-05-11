<?php

namespace Tests\Feature;

use App\Contracts\UserRepositoryInterface;
use App\Repository\UserRepository;
use Tests\TestCase;

class testUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserTest()
    {
        $repository = \Mockery::mock(UserRepository::class);
        $repository->shouldReceive('all')->once()->andReturn(['学院君']);
        $this->instance(UserRepository::class, $repository);
        $response = $this->get('/users');
        $response->assertStatus(200);
        $response->assertViewHas('users', ['学院君']);
    }
}
