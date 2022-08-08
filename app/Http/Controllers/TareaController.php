<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\SaveTareaRequest;


class TareaController extends Controller
{
   
    public function index()
    {
        $tareas = Tarea::get();
        return view('tareas.index',['tareas' => $tareas]);
    }

    public function show(Tarea $tarea)
    {
        return view('tareas.show',['tarea'=> $tarea]); 
    }
    public function create()
    {
        
        
        return view('tareas.create'); 
    }
    public function store(Request $request)
    {

        dd($request);
          //    return to_route('tareas.index')->with('status','tarea Creado!!!');
    }
    public function edit(Tarea $tarea)
    {
        return view('tareas.edit',['tarea'=> $tarea]); 
    }
    public function update(Request $requesT)
    {
        $tarea->update($request->validated());
       

        return to_route('tareas.show',$tarea)->with('status','tarea Actualizado!!!');
    }
}
