<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('warning', 'Silakan login terlebih dahulu');
        }

        $data = [
            'username' => session()->get('username'),
            'email' => session()->get('email'),
        ];

        return view('dashboard', $data);
    }

    public function AddArticle()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('warning', 'Silakan login terlebih dahulu');
        }

        // Show AddArticle testing page
        return view('admin/AddArticle');
    }
}