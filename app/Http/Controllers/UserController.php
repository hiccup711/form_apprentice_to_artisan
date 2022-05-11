<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;

class UserController extends Controller
{
    public $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getIndex()
    {
        $users = $this->repository->all();
        return $users;
    }
}
