<x-layouts.app title="Crear nueva tarea">
    <h1>Crear nueva Tarea</h1>
    <form method="POST" action="{{ route('tareas.store')}}">
        @csrf
        <x-tarea-form-body :tarea="$tarea" />
        
        <button type="submit">Enviar</button>
        <br>
    </form>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all as $error )
        <li> {{ $error }} </li>
        @endforeach
    </div>   
        
    @endif
   <a href ="{{ route('tareas.index') }}">Regresar</a>
</x-layouts.app>
