<x-layouts.app :title="$tarea->nombre">
    <h1>Formulario de Edicion de  la tarea <i>{{ $tarea->nombre }}</i></h1>
    <form method="POST" action="{{route('tareas.update',$tarea)}}">
        @csrf
        @method('PATCH')
        <x-tarea-form-body :tarea="$tarea" />
    </form>
</x-layouts.app>
