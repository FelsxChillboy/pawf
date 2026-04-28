<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    /**
     * Show login page
     */
    public function showLogin()
    {
        // Jika sudah login, redirect ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login');
    }

    /**
     * Process login
     */
    public function doLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validate
        if (!$email || !$password) {
            return redirect()->back()->with('error', 'Email dan password harus diisi');
        }

        // Check credentials
        $user = $this->userModel->loginUser($email, $password);

        if (!$user) {
            return redirect()->back()->with('error', 'Email atau password salah');
        }

        // Check email verification
        if (!$user['is_verified']) {
            return redirect()->back()->with('warning', 'Email Anda belum diverifikasi. Silakan check email untuk verifikasi.');
        }

        // Set session
        session()->set([
            'logged_in' => true,
            'user_id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
        ]);

        return redirect()->to('/dashboard')->with('success', 'Selamat datang, ' . $user['username'] . '!');
    }

    /**
     * Show register page
     */
    public function showRegister()
    {
        // Jika sudah login, redirect ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/register');
    }

    /**
     * Process register
     */
    public function doRegister()
    {
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $passwordConfirm = $this->request->getPost('password_confirm');

        // Validate input
        if (!$username || !$email || !$password) {
            return redirect()->back()->withInput()->with('error', 'Semua field harus diisi');
        }

        // Check password match
        if ($password !== $passwordConfirm) {
            return redirect()->back()->withInput()->with('error', 'Password tidak sesuai');
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->with('error', 'Format email tidak valid');
        }

        // Check if username exists
        if ($this->userModel->usernameExists($username)) {
            return redirect()->back()->withInput()->with('error', 'Username sudah digunakan');
        }

        // Check if email exists
        if ($this->userModel->emailExists($email)) {
            return redirect()->back()->withInput()->with('error', 'Email sudah terdaftar');
        }

        // Register user
        if ($this->userModel->registerUser($username, $email, $password)) {
            // TODO: Send verification email
            // Untuk sekarang, auto verify
            $this->userModel->where('email', $email)->update(null, ['is_verified' => true]);

            return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silakan login dengan akun Anda.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat registrasi');
        }
    }

    /**
     * Logout
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->with('success', 'Anda telah logout');
    }
}
