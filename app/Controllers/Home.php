<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo view('header');
        echo view('contenido');
        echo view('footer');

        return 0;
    }
}
