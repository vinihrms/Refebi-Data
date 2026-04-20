<?php

namespace App\Controllers;

use CodeIgniter\Cookie\CookieStore;

class HomeController extends BaseController
{   

    private const VIWES_DIRECTORY = "Home/";

    public function index(): string
    {
        return view(self::VIWES_DIRECTORY). 'index';
    }
}
