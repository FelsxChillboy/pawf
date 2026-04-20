<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;

class Post extends BaseController
{
    public function index()
    {
        //buat object
        $post = new PostModel();
        /*ambil data dari database*/
        $data['posts'] = $post->where('status',
    'published')->findAll();

        //kirim data ke view
        echo view('post', $data);
    }
    //-----------------------------------
    public function show($slug)
    {
    $post = new PostModel();
        $data['post'] = $post->where([
        'slug' => $slug,
        'status' => 'published'
    ])->first();

    //tamoilan 404 error

    if (!$data['post']) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Post tidak ditemukan');    

    }

    echo view('post_detail', $data);
    }
}
