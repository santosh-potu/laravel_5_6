<?php

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
})->name('home');

Route::get('/lang/{locale?}', function ($locale) {
    App::setLocale($locale);
    return view('translation_example');
})->name('lang');

Route::get('/ID/{id?}',function($id=0){
    return "ID is $id";
})->name('ID');

Route::get('/id/{id}',function($id=0){
    return "id  is $id & case sensitive. parameter is not optional";
})->name('id');

Route::get('/about',function(){
    return "This is Laravel test App";
})->name('about');



Route::get('/array',function(){
    $sample_array['author'] = 'Santosh';
    $sample_array['purpose'] = 'Laravel Learning';
    return view('welcome',$sample_array);
})->name('array');

Route::get('/facades/encrypt',function(){
    return Crypt::encrypt('123456789');
})->name('facades_encrypt');

Route::get('/facades/decrypt',function(){
    return Crypt::decrypt('eyJpdiI6IlwvUWdpQ1NpbjBXRXV4d0xETDBLSWhBPT0iLCJ2YWx1ZSI6InQ0cVZ6XC9EMExXMGF1UkxTNGxxU0ttQzBEUkVXK3d6VEdLWHA3bzlSZWpRPSIsIm1hYyI6IjU5NWFjNThlNmE4MGI1ZmUwMGRlYzBlZmI1NjAwOGExNDY0MWEwNDE2MzNkN2MyODE5M2Q5MTc0YTQ3OGRjMDUifQ==');
})->name('facades_decrypt');

Route::get('/titles','TestController@di')->name('titles');