<?php

use App\Http\Controllers\PostController;
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
/*
Route::get('/', function () {    return view('welcome');
});
*/


Route::view('/', 'welcome')->name('home');;

Route::view('/contacto', 'contact')->name('contact');

//una forma de enviar datos:
//Route::view('/blog', 'blog', ['posts'=>$posts])->name('blog');

//segunda forma: sin usar controladores directamente en las rutas
/*
Route::get('/blog',  function() {
    $posts = [
        ['title' => 'Primero'],
        ['title' => 'Segundo'],
        ['title' => 'TErcero'],
        ['title' => 'Cuarto'],
    
    ];
    return view('blog',['posts' => $posts]);

})->name('blog');
*/

//tercera forma: usando controladores
//se debe crear el controlador en la carpeta app/http/controller
//debe ser invocable si es un solo metodo
//Route::get('/blog', PostController::class )->name('blog');

//cuarta forma: usando controladores que tendra mas de un metodo
//se debe crear un metodo llamado index

Route::get('/blog', [PostController::class,'index'] )->name('blog');




Route::view('/about', 'about')->name('about');

