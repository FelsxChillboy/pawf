<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;

class Post extends BaseController
{
    protected $postModel;
    protected $categoryModel;
    protected $commentModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->categoryModel = new CategoryModel();
        $this->commentModel = new CommentModel();
    }

    public function index()
    {
        $request = service('request');
        $keyword = $request->getGet('q');
        $categoryId = $request->getGet('category');

        $data = [];
        $data['keyword'] = $keyword ?? '';
        $data['categoryId'] = $categoryId ?? '';
        $data['categories'] = $this->categoryModel->findAll();

        // Jika ada kategori filter
        if (!empty($categoryId)) {
            $data['posts'] = $this->postModel->getByCategory($categoryId, 6);
            $data['pager'] = $this->postModel->pager;
        } 
        // Jika ada keyword search
        else if (!empty($keyword)) {
            $data['posts'] = $this->postModel->searchWithPagination($keyword, 6);
            $data['pager'] = $this->postModel->pager;
        } 
        // Default tampilkan semua
        else {
            $data['posts'] = $this->postModel->getPublishedWithPagination(6);
            $data['pager'] = $this->postModel->pager;
        }

        echo view('post', $data);
    }

    public function viewPost($slug)
    {
        $data['post'] = $this->postModel->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        if (!$data['post']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Post tidak ditemukan');
        }

        // Get comments for this post
        $data['comments'] = $this->commentModel->getApprovedComments($data['post']['id']);
        
        // Get related posts (same category)
        if ($data['post']['category_id']) {
            $data['relatedPosts'] = $this->postModel->where('category_id', $data['post']['category_id'])
                                                    ->where('id !=', $data['post']['id'])
                                                    ->where('status', 'published')
                                                    ->limit(3)
                                                    ->findAll();
        } else {
            $data['relatedPosts'] = [];
        }

        echo view('post_detail', $data);
    }
}

