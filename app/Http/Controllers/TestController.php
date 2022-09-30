<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(){

        return 'default load page';
    }

    public function index(){
        $name = 'Milina';
        return view('index', compact('name'));
    }
    public function test(){
    return 'test';
    }
}
