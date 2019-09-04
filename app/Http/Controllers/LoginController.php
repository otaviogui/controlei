<?php

namespace App\Http\Controllers;
use App\Services\UserService;

class LoginController extends Controller
{

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        return view('login.index');
    }

    public function toLogin($data)
    {
        return $this->service->verifyUser($data);
    }
}
