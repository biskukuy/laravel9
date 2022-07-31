<x-layouts.app title="Crear nueva tarea">
    <h1>Crear nueva Tarea</h1>
    <form method="POST" action="{{ route('tareas.store')}}">
        @csrf
        @include('tareas.form-fields')
        <button type="submit">Enviar</button>
        <br>
    </form>
    <br>
   <a href ="{{ route('tareas.index') }}">Regresar</a>
</x-layouts.app>
