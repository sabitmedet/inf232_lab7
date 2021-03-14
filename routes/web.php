<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Http\Controllers\BlogControllr;

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
})->name('default');

Route::get('/home', function () {
    return view('home_page');
})->name('home');

Route::get('/contact', function () {
    return view('contact_page');
})->name('contact');

Route::get('/about', function () {
    return view('about_page');
})->name('about');

Route::get('blog/add', function() {
    DB::table('blogs')->insert([
        'name' => 'Medet',
        'surname' => 'Sabit',
        'age' => '19',
    ]);
});

Route::get('blog', [BlogControllr::class, 'index']);