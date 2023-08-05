<?php

namespace App\Controllers;

class user extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }
}
