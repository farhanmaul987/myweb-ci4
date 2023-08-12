<?php

namespace App\Libraries;

class Widget
{
    public function messages(array $params)
    {
        return view('widget/messages', $params);
    }
}
