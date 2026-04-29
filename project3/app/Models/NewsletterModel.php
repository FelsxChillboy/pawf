<?php

namespace App\Controllers;

use App\Models\NewsletterModel;
use CodeIgniter\HTTP\ResponseInterface;

class Newsletter extends BaseController
{
    public function subscribe()
    {
        $rules = [
            'email' => 'required|valid_email|is_unique[newsletter.email]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Email tidak valid atau sudah terdaftar.');
        }

        $model = new NewsletterModel();
        $model->save([
            'email' => $this->request->getPost('email')
        ]);

        return redirect()->back()->with('message', 'Terima kasih telah berlangganan!');
    }
}
