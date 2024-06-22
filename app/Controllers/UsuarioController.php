<?php

namespace App\Controllers;

class UsuarioController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'registro';
        echo view('head', $data);
        echo view('menu');
        echo view('registrarse');
        echo view('footer');  
    }
}