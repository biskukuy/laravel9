<?php
namespace App\Http\Controllers;

class PostController extends Controller
{

   /* 
   public function __invoke()
    {
        $posts = [
            ['title' => 'Primero'],
            ['title' => 'Segundo'],
            ['title' => 'TErcero'],
            ['title' => 'Cuarto'],
        
        ];
        return view('blog',['posts' => $posts]);
    }
    */
    public function index()
    {
        $posts = [
            ['title' => 'Primero'],
            ['title' => 'Segundo'],
            ['title' => 'Tercero'],
            ['title' => 'Cuarto'],
        
        ];
        return view('blog',['posts' => $posts]);
    }


}