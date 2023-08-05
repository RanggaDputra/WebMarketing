<?php

namespace App\Controllers;

use App\Models\adminModel;

class admin2 extends BaseController

{
    protected $db, $builder, $builder2;



    public function cetak()
    {

        return view('admin2/cetak');
    }
}
