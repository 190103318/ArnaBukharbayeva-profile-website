<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadFileController;
use App\Mail\SendEmail;
use App\Http\Controllers\FormController;

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
// Route::get('/form', function () {
//     return view('form');
// })->name('form');


Route::get('/post/create', function () {
    DB::table('post')->insert([
    'title'=>'Technologies',
    'body'=>'Several technologies, such as 3D printing, nanotechnology, data analytics, blockchain, and AI, impact all six sectors.'
    ]);
 });
 Route::get('/post', function () {
    $post= Post::find(1);
    return $post->body;
 });

 Route::get('/blog/index',[BlogController::class,'index']);
 Route::get('/blog/create', function () {
    return view('blog/create');
});
 Route::post('/blog/create', [BlogController::class, 'store'])->name('add-blog');
 Route::get('/blog/{id}', [BlogController::class, 'get_blog']);



Route::get('/form', 'App\Http\Controllers\FormController@index')->name('form');
Route::post('/addform', 'App\Http\Controllers\FormController@store')->name('addform');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');

// Route::get('mail/send', function () {
//     return new SendEmail();
// });

Route::get('main/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('/main');
});
Route::get('main/{lang}','App\Http\Controllers\LocalizationController@index' );

Route::get('/forms/all',[FormController::class,'get_form']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);

Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('sendemail/send', 'App\Http\Controllers\SendEmailController@send');