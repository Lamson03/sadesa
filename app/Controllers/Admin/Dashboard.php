<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    // index halaman utama dashboard untuk admin
    public function index(): string
    {
        $data = [
            'title' => 'Home',
        ];

        return view('admin/index');
    }
}
