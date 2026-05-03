<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['username', 'email', 'password', 'is_verified', 'role', 'remember_token'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules      = [
        'username' => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]',
    ];
    protected $validationMessages   = [
        'username' => [
            'is_unique' => 'Username sudah digunakan',
            'min_length' => 'Username minimal 3 karakter',
        ],
        'email' => [
            'is_unique' => 'Email sudah terdaftar',
            'valid_email' => 'Email tidak valid',
        ],
        'password' => [
            'min_length' => 'Password minimal 6 karakter',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ['hashPassword'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    /**
     * Hash password sebelum insert/update
     */
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);
        }
        return $data;
    }

    /**
     * Register user baru
     */
    public function registerUser($username, $email, $password)
    {
        $data = [
            'username' => $username,
            'email'    => $email,
            'password' => $password,
            'is_verified' => false,
        ];

        return $this->insert($data) ? true : false;
    }

    /**
     * Login user - check email dan password
     */
    public function loginUser($email, $password)
    {
        $user = $this->where('email', $email)->first();
        
        if (!$user) {
            return false;
        }

        // Verify password
        if (!password_verify($password, $user['password'])) {
            return false;
        }

        return $user;
    }

    /**
     * Cek apakah email sudah terdaftar
     */
    public function emailExists($email)
    {
        return $this->where('email', $email)->first() ? true : false;
    }

    /**
     * Cek apakah username sudah terdaftar
     */
    public function usernameExists($username)
    {
        return $this->where('username', $username)->first() ? true : false;
    }

    /**
     * Verify email
     */
    public function verifyEmail($email)
    {
        return $this->where('email', $email)->update(['id' => null], ['is_verified' => true]);
    }

    /**
     * Get user by email
     */
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }


    /**
 * Generate remember token
 */
public function generateRememberToken($userId)
{
    $token = bin2hex(random_bytes(32));
    $this->update($userId, ['remember_token' => $token]);
    return $token;
}

/**
 * Clear remember token saat logout
 */
public function clearRememberToken($userId)
{
    // Kosongkan token - skip jika kolom belum ada
    try {
        $this->db->table('users')
                 ->where('id', $userId)
                 ->update(['remember_token' => null]);
    } catch (\Exception $e) {
        // Abaikan error jika kolom belum ada
    }
}
}
