<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = 
        [
            'page' => "index",
            'level' => "user"
        ];
        return view('home/index', $data);
    }
}
