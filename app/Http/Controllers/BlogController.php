<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        return 'Посты в блоке';
    }
    public function show($post)
    {
        return 'Один Пост в блоке';
    }
    public function like($post)
    {
        return 'Поставить лайк';
    }
}
