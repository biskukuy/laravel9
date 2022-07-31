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
        return view('tareas.create',['tarea'=> new Tarea]); 
    }
    public function store(Request $request)
    {
      
        $datos = $request->validate(
            [
                'nombre' => 'required|min:10',
                'descripcion'  => 'nullable|max:255',
                'finalizada' => 'required|min:0|max:1',
                'urgencia' => 'required|min:0|max:1',
                'fecha_limite' => 'required|date_format:Y-m-d\Th:i'
    
            ]
            );
     // dd($datos);
        Tarea::create($datos);
      

        return to_route('tareas.index')->with('status','tarea Creado!!!');
    }
    public function edit(Tarea $tarea)
    {
        return view('tareas.edit',['tarea'=> $tarea]); 
    }
    public function update(SaveTareaRequest $request, Tarea $tarea)
    {
        $tarea->update($request->validated());
       

        return to_route('tareas.show',$tarea)->with('status','tarea Actualizado!!!');
    }
}
