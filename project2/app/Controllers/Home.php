<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('v_home'); # mengarahkan ke file v_home.php yang ada di folder Views
    }
}
