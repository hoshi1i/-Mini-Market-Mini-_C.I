<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('project_ci/dashboard.php');
    }
}
