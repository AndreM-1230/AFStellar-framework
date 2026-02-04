<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
//use App\Services\UserService;
use App\Core\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $this->view('users', compact(['users']));
    }

    public function show(Request $request)
    {
        $user = User::find($request->id);
        return $this->view('users', compact(['user']));
    }
}