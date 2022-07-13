<?php
namespace App\Http\Controllers;
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
        $posts = DB::table('posts')->get();

        return view('blog',['posts' => $posts]);
    }


}