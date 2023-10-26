<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini adalah index";
    }
    public function about($nama = "Farabie")
    {
        echo "ini adalah about $nama";
    }
}
