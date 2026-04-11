<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('v_contact'); # mengarahkan ke file v_contact.php yang ada di folder Views
    }
}