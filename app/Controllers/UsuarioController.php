<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UsuarioController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function validar()
    {
        $usuarioModel = new UsuarioModel();
        $emailPasado = $this->request->getPost('email');
        $senhaPasada = $this->request->getPost('senha');
        $usuario = $usuarioModel->where('email', $emailPasado)->first();
        if($usuario &&$senhaPassada == $usuario['senha']){
            return view('dashboard', ['usuario' => $usuario]);
        }
           
        return redirect()->back()->with('erro', 'E-mail ou senha inválidos');
    }
}
