<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'content', 'status', 'author', 'slug', 'category_id'];

    protected bool $allowEmptyInserts = false; // ← ubah jadi bool
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Search method untuk mencari posts berdasarkan keyword
    public function searchPosts($keyword)
    {
        return $this->where('status', 'published')
                    ->groupStart()
                    ->like('title', $keyword)
                    ->orLike('content', $keyword)
                    ->groupEnd()
                    ->findAll();
    }

    // Get published posts with pagination
    public function getPublishedWithPagination($perPage = 6)
    {
        return $this->where('status', 'published')
                    ->orderBy('created_at', 'DESC')
                    ->paginate($perPage);
    }

    // Get posts by category with pagination
    public function getByCategory($categoryId, $perPage = 6)
    {
        return $this->where('status', 'published')
                    ->where('category_id', $categoryId)
                    ->orderBy('created_at', 'DESC')
                    ->paginate($perPage);
    }

    // Search posts with pagination
    public function searchWithPagination($keyword, $perPage = 6)
    {
        return $this->where('status', 'published')
                    ->groupStart()
                    ->like('title', $keyword)
                    ->orLike('content', $keyword)
                    ->groupEnd()
                    ->orderBy('created_at', 'DESC')
                    ->paginate($perPage);
    }
}