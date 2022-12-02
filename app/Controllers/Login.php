<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('Login/loginView.php');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $users = new UsersModel();

        $response = $users->getUsers(array('usuario' => $username, 'password' => $password));

        if (count($response) == 0) {
            return redirect()->to(base_url('/'))->with('msg', 'Usuario no encontrado');
        }

        if ($password != $response[0]['password']) {
            return redirect()->to(base_url('/'))->with('msg', 'Contraseña incorrecta');
        }

        if ($response[0]['change_password'] == 0) {
            return view(
                'Login/cambiaPasswordView',
                [
                    'nombre' => $response[0]['usuario'],
                    'id' => $response[0]['id_user']
                ]
            );
        }

        $info = array(
            'id' => $response[0]['id_user'],
            'name' => $response[0]['usuario']
        );

        $session = session();
        $session->set($info);
        return redirect()->to(base_url('/dashboard'))->with('status', '1');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()
            ->to(base_url('/'))
            ->with('msg', 'Sesion cerrada correctamente');
    }

    public function changePassword()
    {
        return view('Login/cambiaPasswordView', ['nombre' => session('usuario')]);
    }

    public function updatePass()
    {
        $password = $this->request->getPost('password');
        $id = $this->request->getPost('id');
        $user = new UsersModel();

          if ($user->updatePassword($id, $password) == 0) {
            return redirect()->to(base_url('updatePass'))->with('msg', 'Error al actualizar la contraseña');
        }

        return redirect()->to(base_url('salir'))->with('status', '1'); 
    }
}
