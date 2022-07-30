<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TareaController;

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('contacto', 'contact')->name('contact');

Route::get('blog', [PostController::class,'index'] )->name('posts.index');

Route::get('blog/create', [PostController::class,'create'] )->name('posts.create');

Route::post('blog', [PostController::class,'store'] )->name('posts.store');

Route::get('blog/{post}', [PostController::class,'show'] )->name('posts.show');

Route::get('blog/{post}/edit', [PostController::class,'edit'] )->name('posts.edit');

Route::patch('blog/{post}', [PostController::class,'update'] )->name('posts.update');

Route::view('about', 'about')->name('about');

Route::view('pagina', 'pagina')->name('pagina');

Route::get('tarea', [TareaController::class,'index'] )->name('tareas.index');

Route::get('tarea/create', [PostController::class,'create'] )->name('tareas.create');

Route::post('tarea', [PostController::class,'store'] )->name('tareas.store');

Route::get('tarea/{post}', [PostController::class,'show'] )->name('tareas.show');

Route::get('tarea/{post}/edit', [PostController::class,'edit'] )->name('tareas.edit');

Route::patch('tarea/{post}', [PostController::class,'update'] )->name('tareas.update');

