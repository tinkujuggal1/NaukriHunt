<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('homepage');
    }

    public function login(): string
    {
        return view('login');
    }
}
