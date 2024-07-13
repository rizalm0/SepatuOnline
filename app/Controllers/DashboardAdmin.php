<?php

namespace App\Controllers;

class DashboardAdmin extends BaseController
{
    public function index()
    {
        echo view('part_admin/header');
        echo view('part_admin/sidebar');
        echo view('admin/dashboard');
        echo view('part_admin/footer');
    }
}