<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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
        $posts = Post::get();

        return view('blog',['posts' => $posts]);
    }


}