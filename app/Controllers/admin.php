<?php

namespace App\Controllers;

use App\Models\adminModel;
use CodeIgniter\HTTP\Request;

class admin extends BaseController

{
    protected $db, $builder, $builder2;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }



    public function index()
    {
        $data = [
            'title' => ' User Login'
        ];
        // $users = new \myth\auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('users.id as userid,username,email,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data['users'] = $query->getResult();

        return view('admin/index', $data);
    }

    public function detail($id = 0)
    {

        $data = [
            'title' => 'Detail User Login'
        ];

        $this->builder->select('users.id as userid,username,email,fullname,user_image,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }
        return view('admin/detail', $data);
    }
    public function index3()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->adminModel->search($keyword);
        } else {
            $orang = $this->adminModel;
        }
        $currentPage =  $this->request->getVar('page_user2') ? $this->request->getVar('page_user2') : 1;
        $db = \Config\Database::connect();
        $builder = $db->table('user2');
        $builder->select('user2.id as id,name,email');
        $modelUser = new \App\Models\adminModel();
        $modelUser = $builder->get();
        $data['user2'] = $modelUser->getResult();
        $data = [
            'user2' => $orang->paginate(5, 'user2'),
            'pager' => $this->adminModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/index2', $data);
    }
}
