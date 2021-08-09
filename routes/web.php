<?php

use App\Http\Controllers\HomeController;
use App\Post;
use App\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', 'HomeController@index');

// Статьи
Route::redirect('/publikacii', '/', 301);
Route::get('/publikacii/sozdat-statyu', 'PostController@create')->name('postCreate');
Route::post('/publikacii', 'PostController@store');
Route::get('/publikacii/{post}', 'PostController@show');

// Задачи
// Route::get('/tasks', 'TaskController@index');
// Route::get('/tasks/sozdat-zadachu', 'TaskController@create');
// Route::get('/tasks/{task}', 'TaskController@show');

// Контакты
Route::get('/kontacty', 'ContactController@index')->name('contacts');
Route::post('/kontacty', 'ContactController@store');
Route::get('/obrashcheniya', 'ContactController@show')->name('feedback');

// О нас
Route::get('/o-nas', 'AboutController@index')->name('about');
