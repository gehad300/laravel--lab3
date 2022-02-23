<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Middleware;

//use controller here
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->Middleware('auth');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->Middleware('auth');
//create action will responsible to view create form
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->Middleware('auth','MyAdminGate');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->Middleware('auth');
// post here to take numbers from user and put it here as aparameter
//to view specific post after while i will use this to view or execute query by post id
// framework search in lines in route sequentially
// cause of that i should write paramaterized view at the last
//alias name of route name i wanna make an alias for route
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->Middleware('auth');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->Middleware('auth');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->Middleware('auth');
Route::get('/hello', function(){

});
//routes call controller and action and that action that view
//every change in database should create new schema and make php artisan
// there is a table called migration contains created files //it's job to check is there a file to run it's database or what
//then add php artisan migrate
//request come to application first passed through middleware it's like gate
//in this gate to make controllers and actions you have
 Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//trait is a class to put block of code inside it to use it inside other classes can use it cause there is no multiple inheritance here
//what is the difference between authorization and authontication
//authorization what are your authority to for ex:make posts
//now i want to just make people who register
//مش هيحصل call to any functions قبل مانعدي علي الauth