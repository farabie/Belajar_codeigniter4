<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController; //Untuk mengarahkan base controllernya

class Users extends BaseController
{
    public function index()
    {
        echo "Ini adalah controller Users method index yang ada di dalam folder Admin";
    }
}
