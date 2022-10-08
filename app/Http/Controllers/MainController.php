<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\ValidationException;

class MainController extends Controller
{
    public function index(){
        $name = 'Milina';
        return view('index', compact('name'));
    }

    public function about(){
        return view('about');
    }

    public function about_store(Request $request){
        // Получение данных из формы
//        $data = $request->all();
//        $data = $request->only(['name', 'email']);
//        $data = $request->input('name');
//        $data = request('name');
        $data = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        dd($data, $email, $phone, $message);
//        if(true) {
//            return redirect()->back()->withInput();
//        }
//        return view('about_store');
    }

    public function what_we_do(Request $request){
//        $sessionPut = session()->put('foo', 'bar');
//        $sessionPull = session()->pull('foo');
//        $session = session('foo','bar');
//        session(['admin' => true]);
//        session()->forget('admin');
//
//        dump(session('admin'));
//
//        if(!session('admin')) {
//            return redirect('login');
//        }
            return view('what-we-do');
    }

    public function pricing(){
        return view('pricing');
    }

    public function contact(Request $request){
//        session()->put('foo', 'bar');
//        session(['foo' => 'bar']);
//        session(['foo' => __('Письмо отправленно')]);


        return view('contact');
    }

    /**
     * @throws ValidationException
     */
    public function contact_store(Request $request){
//        session()->put('foo', 'bar');
//        session(['foo' => 'bar']);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

//        session(['alert' => __('Письмо успешно отправлено от вашего лица ').$name]);
//        dd(session('alert'));

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'max:20'],
            'message' => ['required', 'string', 'max:10000'],
        ]);


        dd($validated);

//        Функция выводит сообщение
        alert(__('Письмо отправлено'), 'warning');

        return view('contact');
    }

    public function calendar(Request $request){
//        return view('calendar');

        //action

        //response
//        $responce = app()->make('responce');
//        $responce = app('responce');
//        $responce = Response::make('asdf');
//        $responce = responce();
//        return responce('test');

        return __METHOD__;

//        return redirect()->route('about');
//        return redirect()->back();

    }
}
