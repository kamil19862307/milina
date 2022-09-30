<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Страница списка постов';
    }
    public function create(){
        return 'Страница создания поста';
    }
    public function store(){
        return 'Запрос создания поста';
    }
    public function show($post){
        return "Страница просмотр поста номер {$post}";
    }
    public function edit($post){
        return "Страница изменения поста номер {$post}";
    }
    public function update(){
        return 'Запрос изменения поста';
    }
    public function delete(){
        return 'Страница удаления поста';
    }
    public function like(){
        return 'Лайк +1';
    }
}
