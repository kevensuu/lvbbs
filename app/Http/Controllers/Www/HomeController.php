<?php

namespace App\Http\Controllers\Www;

class HomeController extends BaseController
{
    public function show()
    {
        return $this->display('www.home');
    }
}
