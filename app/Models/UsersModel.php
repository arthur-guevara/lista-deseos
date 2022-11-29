<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';

    public function getUsers($data)
    {
        $Usuario = $this->db->table('users');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

    public function getUsersData($id){
        $builder = $this->db->table('users');
        $builder->select('users.usuario, users.avatar, wish.wish');
        $builder->join('wish', 'users.id_user = wish.id_usuario');
        $builder->whereNotIn('users.id_user', [$id]);
        return $builder->get()->getResultArray();
    }

    public function getMyData($id){
        $builder = $this->db->table('wish');
        $builder->select('wish.wish');
        $builder -> where($id);
        return $builder->get()->getResultArray();
    }
}
