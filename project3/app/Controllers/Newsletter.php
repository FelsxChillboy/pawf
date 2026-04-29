<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class Newsletter extends BaseController
{
    public function index()
    {
        return view('newsletter/subscribe');
    }

    public function subscribe()
    {
        $email = $this->request->getPost('email');

        // Simpan ke DB atau proses email di sini nanti

        // Set flash message
        session()->setFlashdata('success', 'Berhasil subscribe! Terima kasih 🎉');

        // Redirect balik ke home
        return redirect()->to('/');
    }
}