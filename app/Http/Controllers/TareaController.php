<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\SaveTareaRequest;

class TareaController extends Controller
{
   
    public function index()
    {
        $tareas = Tarea::orderByDesc('id')->get();
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
      
        $datos = $request->validate(
            [
            'nombre'        => 'required|max:60',
            'descripcion'   => 'required|max:255',
            'finalizada'    =>  'nullable',
            'urgencia'      => 'required|numeric|min:0|max:2',
            'fecha_limite'  => 'required|date_format:Y-m-d\TH:i',

        ]);
        if(isset($datos["finalizada"]))
            $datos["finalizada"]= $datos["finalizada"] =="on" ? 1: 0;
        $tarea = Tarea::create($datos);
        
            
        return to_route('tareas.index')->with('status','tarea Creada!!!');
    }
    public function edit(Tarea $tarea)
    {
        return view('tareas.edit',['tarea'=> $tarea]); 
    }
    public function update(Request $requesT)
    {
      //  $tarea->update($request->validated());
        //return to_route('tareas.show',$tarea)->with('status','tarea Actualizado!!!');
    }
}
