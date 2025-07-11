<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $users = $this->userService->index();
        return $this->view('users', compact(['users']));
    }
}