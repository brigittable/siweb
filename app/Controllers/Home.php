<?php

namespace App\Controllers;

//placeholder
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function about ($nama = null, $umur = 0)
    {
        echo "Hi, my name is $nama. I'm $umur years old";
    }
}
