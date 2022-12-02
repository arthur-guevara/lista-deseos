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

    public function getUsersData($id)
    {
        $builder = $this->db->table('users');
        $builder->select('users.usuario, users.avatar, wish.wish');
        $builder->join('wish', 'users.id_user = wish.id_usuario');
        $builder->whereNotIn('users.id_user', [$id]);
        return $builder->get()->getResultArray();
    }

    public function getMyData($id)
    {
        $builder = $this->db->table('wish');
        $builder->select('wish.wish');
        $builder->where($id);
        return $builder->get()->getResultArray();
    }

    public function updatePassword($id, $password)
    {
        $update = [
            'password' => $password,
            'change_password' => 1
        ];
        $builder = $this->db->table('users');
        $builder->where('id_user', $id);
        $builder->update($update);
        return $this->db->affectedRows();
    }

    public function checkWish($data)
    {
        $builder = $this->db->table('wish');
        $builder->select('wish');
        $builder->where('id_usuario', $data['id']);
        if (count($builder->get()->getResultArray()) == 0) {
            return 'newWish';
        }
        return 'updateWish';
    }

    public function updateWish($data)
    {
        $builder = $this->db->table('wish');
        $update = [
            'wish' => $data['wish']
        ];
        $builder->where('id_usuario', $data['id']);
        $builder->update($update);
        return $this->db->affectedRows();
    }

    public function newWish($data)
    {
        $builder = $this->db->table('wish');
        $insert = [
            'wish' => $data['wish'],
            'id_usuario' => $data['id']
        ];
        $builder->insert($insert);
        return $this->db->affectedRows();
    }
}
