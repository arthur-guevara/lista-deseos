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
                'myData' => $myData[0]['wish']
            ]
        );
    }
}
