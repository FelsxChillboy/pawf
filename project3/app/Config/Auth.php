<?php
namespace Config;
use CodeIgniter\Config\BaseConfig;
use Myth\Auth\Config\Auth as AuthConfig; // add this code

class Auth extends AuthConfig
{
    /**
     * ---------------------------------------------------------------
     * Require Confirmation Registration via Email
     * ---------------------------------------------------------------
     */
    public $requireActivation = null; // add this code
}

// Set session
$sessionData = [
    'logged_in' => true,
    'user_id'   => $user['id'],
    'username'  => $user['username'],
    'email'     => $user['email'],
    'role'      => $user['role'], 
];