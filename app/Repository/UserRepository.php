<?php
namespace App\Repository;

use App\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function all(): array
    {
        return User::all()->toArray();
    }
}
