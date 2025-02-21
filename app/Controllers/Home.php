<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        return view('project_ci/dashboard');
    }
    

    public function daftar(): string
    {
        return view('project_ci/daftar');
    }

}