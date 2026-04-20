<?php

namespace App\Controllers;

class AppController extends BaseController
{
    private const VIEWS_DIRECTORY = 'App/';

    public function index(): string
    {
        return view(self::VIEWS_DIRECTORY . 'index', $this->dataToView);
    }
}
