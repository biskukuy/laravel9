<x-layouts.app :title="$tarea->nombre">
    <h1>Formulario de Edicion</h1>
    <form method="POST" action="{{route('tareas.update',$tarea)}}">
        @csrf
        @method('PATCH')
        @include('tareas.form-fields')
        <button type="submit">Enviar</button>
        <br>
    </form>
    
  

    <a href ="{{route('tareas.index')}}">Regresar</a>
</x-layouts.app>
