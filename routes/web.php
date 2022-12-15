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
    $home_page_title = "Hello World";
    return view('home', compact('home_page_title'));
});

Route::get('/about', function () {
    $data = [
        'title' => 'About us',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum illo iste vero, maxime ab dolore numquam nemo ad unde! Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus optio dolore ducimus id odit repellat animi illum neque recusandae. Sit sequi eius modi eum, delectus vitae nostrum est et animi quisquam architecto exercitationem quos iusto nam! Quae dolor, debitis illum qui aperiam fugiat obcaecati doloremque repudiandae dolorem illo corporis aut!'
    ];
    return view('about', $data);
})->name('about');

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum illo iste vero, maxime ab dolore numquam nemo ad unde! Aspernatur.'
    ];
    return view('contact', $data);
})->name('contact');
