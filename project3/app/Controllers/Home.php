<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\CategoryModel;

class Home extends BaseController
{
    public function index(): string
    {
        $postModel = new PostModel();
        $categoryModel = new CategoryModel();

        $data = [
            'featuredPosts' => $postModel->where('status', 'published')
                                        ->orderBy('created_at', 'DESC')
                                        ->limit(3)
                                        ->findAll(),
            'categories' => $categoryModel->findAll(),
            'totalPosts' => $postModel->where('status', 'published')->countAllResults(),
        ];

        return view('home', $data);
    }
}
