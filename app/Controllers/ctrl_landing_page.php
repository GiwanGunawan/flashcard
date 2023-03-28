<?php

namespace App\Controllers;

class ctrl_landing_page extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }
}
