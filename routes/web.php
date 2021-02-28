<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('main');
})->name('main');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/post/create', function () {
    DB::table('post')->insert([
    'title'=>'Future Technologies',
    'body'=>'Several technologies, such as 3D printing, nanotechnology, data analytics, blockchain, and AI, impact all six sectors.'
    ]);
 });
 Route::get('/post', function () {
    $post= Post::find(1);
    return $post->body;
 });