<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        return view('v_services'); # mengarahkan ke file v_services.php yang ada di folder Views
    }
}