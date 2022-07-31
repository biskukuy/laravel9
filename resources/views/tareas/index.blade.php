<x-layouts.app title="Tareas" meta-description="Pagina de Tareas">
  <div class="container shadow bg-white">
    <h1>Tareas</h1>
  </div> 
  
  
  
   
      <a href="{{ route('tareas.create') }}"> Crear nueva Tarea</a>
      @foreach ($tareas as $tarea)
      <div style="display: flex; align-items:baseline">
        <h2>  
          <a href="{{ route('tareas.show',$tarea) }}">{{ $tarea->nombre }}</a>
        </h2>
        &nbsp;
        <a href="{{ route('tareas.edit',$tarea) }}">Editar</a>
      </div>
      @endforeach
   
</x-layouts.app>
