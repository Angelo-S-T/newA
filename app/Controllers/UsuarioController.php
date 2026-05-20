<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UsuarioController extends BaseController
{
    public function index()
    {
        //
    }

    public function validar()
    {
        $usuario = new UsuarioModel();

        $email=$this->request->getPost('email');
        $senha=$this->request->getPost('senha');

        if($usuario[email]==$email){
            if($usuario[senha]==$senha){
                return view('dashboard');
            }
        }
    }
}
