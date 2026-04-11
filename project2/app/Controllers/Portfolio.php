<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        return view('v_portfolio'); # mengarahkan ke file v_portfolio.php yang ada di folder Views
    }
}
