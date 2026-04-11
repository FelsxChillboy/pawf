<?php

namespace App\Controllers;

class Resume extends BaseController
{
    public function index()
    {
        return view('v_resume'); # mengarahkan ke file v_resume.php yang ada di folder Views
    }
}