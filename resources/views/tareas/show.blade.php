<x-layouts.app :title="$tarea->nombre">
    <h1>{{$tarea->nombre}}</h1>

    <p>{{$tarea->descripcion}}</p>

    <a href ="{{ route('tareas.index') }}">Regresar</a>
</x-layouts.app>
