<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/posts', function () {
    return view('posts',[
        "title" => "Posts"
    ]);
});

Route::get('/struktural', function () {
    return view('struktural',[
        "title" => "Struktural"
    ]);
});

Route::get('/recruitment', function () {
    return view('recruitment',[
        "title" => "Recruitment"
    ]);
});


Route::get('/activity', function () {
    return view('activity',[
        "title" => "Activity"
    ]);
});

Route::get('/sejarah', function(){
    return view('sejarah',[
        "title" => "Sejarah"
    ]);
});

Route::get('/recruitment/details', function(){
    return view('recruitment-details', [
        "title" => "Details"
    ]);
});