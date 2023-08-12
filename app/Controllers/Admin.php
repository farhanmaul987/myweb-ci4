<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function admin_data()
    {
        $data['title'] = 'Data Admin';
        echo view('admin/admin_data', $data);
    }

    public function input_admin()
    {
        $data['title'] = 'Input New Admin';
        echo view('admin/c_admin', $data);
    }
}
