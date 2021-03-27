<?php

use App\Http\Controllers\CaptchaController;
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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', "MahasiswaController@index");
Route::get('/pdf', "PdfController@index");

// students route
// Route::get('/students', "StudentsController@index");
// Route::get('/students/create', "StudentsController@create");
// Route::get('/students/{student}', "StudentsController@show");
// Route::post('/students', "StudentsController@store");
// Route::delete('/students/{student}', "StudentsController@destroy");
// Route::get('/students/{student}/edit', "StudentsController@edit");
// Route::put('/students/{student}', "StudentsController@update");

// student route otomatis (CRUD)
Route::resource('students', 'StudentsController');

Route::get('contact-form', 'CaptchaController@index');
Route::post('captcha-validation', 'CaptchaController@captchaFormValidate');
Route::get('reload-captcha', "CaptchaController@reloadCaptcha");
