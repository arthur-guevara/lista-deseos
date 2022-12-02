<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        $dataUsers = new UsersModel();

        return view(
            'Users/dashboardView',
            [
                'nombre' => session('name'),
                'id' => session('id'),
                'dataUsers' => $dataUsers->getUsersData(session('id'))
            ]
        );
    }

    public function lista()
    {
        $data = new UsersModel();
        $myData = $data->getMyData(['id_usuario' => session('id')]);

        return view(
            'Users/miListaView',
            [
                'nombre' => session('name'),
                'id' => session('id'),
                'myData' => count($myData) == 0 ? '' : $myData[0]['wish']
            ]
        );
    }

    public function setWish()
    {
        $users = new UsersModel();
        $data = [
            'wish' => $this->request->getPost('wish'),
            'id' => $this->request->getPost('id')
        ];
 
        $controllerName = $users->checkWish($data);
        $response = $users->$controllerName($data);

        echo json_encode([
            'status' => $response,
            'msg' =>  $response == 1 ? 'Información actualizada' : 'Sin información a actualizar'
        ]);
    }
}
