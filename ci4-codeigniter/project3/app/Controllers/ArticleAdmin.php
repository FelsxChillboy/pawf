<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use CodeIgniter\Controller;

class ArticleAdmin extends Controller
{
    protected $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $data['articles'] = $this->articleModel->findAll();
        return view('admin/article/index', $data);
    }

    public function create()
    {
        return view('admin/article/create');
    }

    public function store()
    {
        $this->articleModel->save([
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ]);
        return redirect()->to('/admin/article');
    }

    public function edit($id)
    {
        $data['article'] = $this->articleModel->find($id);
        return view('admin/article/edit', $data);
    }

    public function update($id)
    {
        $this->articleModel->update($id, [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ]);
        return redirect()->to('/admin/article');
    }

    public function delete($id)
    {
        $this->articleModel->delete($id);
        return redirect()->to('/admin/article');
    }
}