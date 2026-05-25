<?php

namespace App\Controllers;

class Skills extends BaseController
{
    public function index()
    {
        return view('v_skills'); # mengarahkan ke file v_skills.php yang ada di folder Views
    }
}