<?php

namespace App\Controllers;

use App\Models\adminModel;

class admin3 extends BaseController

{
    protected $db, $builder, $builder2;



    public function detail2($id = 0)
    {


        $db = \Config\Database::connect();
        $builder = $db->table('user2');
        $builder->select('user2.id as id,name,email,NoHp,alamat,gmbrktp,gmbr,selfie,koordinat');
        $modelUser = new \App\Models\adminModel();
        $builder->where('user2.id', $id);
        $modelUser = $builder->get();
        $data['user2'] = $modelUser->getRow();

        return view('admin2/detail2', $data);
    }
}
