<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CommentModel;
use App\Models\PostModel;

class Comment extends BaseController
{
    protected $commentModel;
    protected $postModel;

    public function __construct()
    {
        $this->commentModel = new CommentModel();
        $this->postModel = new PostModel();
    }

    public function store()
    {
        $request = service('request');
        $postId = $request->getPost('post_id');
        
        // Validate post exists
        $post = $this->postModel->find($postId);
        if (!$post) {
            return redirect()->back()->with('error', 'Post tidak ditemukan');
        }

        // Validate and save comment
        $data = [
            'post_id' => $postId,
            'name'    => $request->getPost('name'),
            'email'   => $request->getPost('email'),
            'comment' => $request->getPost('comment'),
            'status'  => 'pending'
        ];

        if ($this->commentModel->validate($this->commentModel->getValidationRules())) {
            $this->commentModel->save($data);
            return redirect()->back()->with('success', 'Komentar Anda telah dikirim dan menunggu persetujuan admin');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->commentModel->errors());
        }
    }
}
