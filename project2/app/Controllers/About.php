<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('v_about'); # mengarahkan ke file v_about.php yang ada di folder Views
    }
}
