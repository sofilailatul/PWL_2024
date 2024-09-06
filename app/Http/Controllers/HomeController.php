<?php

namespace App\Http\Controllers;
use Illuminate\Https\Request; 

class HomeController extends Controller
{
    public function index()
    {
        return 'selamat datang';
    }
}
