<?php

namespace App\Http\Controllers;
use Illuminate\Https\Request; 

class ArticleController extends Controller
{
    public function articles($id)
    {
        return 'halaman article dengan ID' .$id;
    }
}
