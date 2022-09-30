<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('default', TestController::class)->name('home.default');

//Route::get('test', [TestController::class, 'test'])->name('test')->middleware(LogMiddleware::class);//Логи через один маршрут
//Route::get('test', [TestController::class, 'test'])->name('test')->middleware(LogMiddleware::class);//Логи через один маршрут
//Route::get('test', [TestController::class, 'test'])->name('test')->middleware('test');//Логи через группу в kernel.php
//В protected $middleware добавил\App\Http\Middleware\LogMiddleware::class, теперь всё будет логгироваться
Route::get('test', [TestController::class, 'test'])->name('test');

//http://milina.my/test?token=secret Можно передавать параметры токенов. В TokenMiddleware лежат параметры обработки
//Route::get('test', [TestController::class, 'test'])->name('test')->middleware('token');

Route::redirect('redirect', '/')->name('home.redirect');


Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

//Подключаю middleware guest в kernel.php для редиректа в кабинет пользователя, если авторизован
//    Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
//Делаю для всей группы
Route::middleware('guest')->group(function(){
//    А так можно исключать из группы
//    Route::get('login', [LoginController::class, 'index'])->name('login')->withoutMiddleware('guest');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
    Route::get('login/{user}/confirmation', [LoginController::class, 'confirmation'])->name('login.confirmation');
    Route::get('login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');
});


// User
// CRUD (create, read, update, delete)
Route::prefix('user')->middleware(['auth', 'active'])->group(function(){
    Route::redirect('/', 'user/posts')->name('user');

    Route::get('posts', [PostController::class, 'index'])->name('user.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('user.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('user.posts.like');
});

// Admin
// CRUD (create, read, update, delete)
Route::prefix('admin')->middleware(['auth', 'active', 'admin'])->group(function(){
    Route::redirect('/', 'admin/posts')->name('admin');

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
//    Route::get('posts', [PostController::class, 'index'])->name('admin.posts')->middleware('role:writer');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
//    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create')->middleware('role:writer');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');
});

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::get('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');

//Route::post('posts/{post}/comment', [PostController::class, 'comment'])->name('posts.comment');

Route::resource('posts/{post}/comments', CommentController::class);

//Route::resource('posts', PostController::class);
//Route::resource('posts', PostController::class)->only(['index', 'show']);





// Этот роут должен стоять после всех роутов
Route::fallback(function(){
    return view('404');
});
