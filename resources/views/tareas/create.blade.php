<x-layouts.app title="Crear nueva tarea" meta-description="Formulario para crear un nueva TArea">
    <h1>Crear nuevo Post</h1>
    <form method="POST" action="{{ route('tareas.store')}}">
        @csrf
        @include('tareas.form-fields')
        <button type="submit">Enviar</button>
        <br>
    </form>
    <br>
   <a href ="{{ route('tareas.index') }}">Regresar</a>
</x-layouts.app>
