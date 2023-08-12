<?php

namespace App\Controllers;

class User extends BaseController
{
    public function user_data()
    {
        $data['title'] = 'Data User';
        echo view('user/user_data', $data);
    }

    public function input_user()
    {
        $data['title'] = 'Input New User';
        echo view('user/c_user', $data);
    }
}
