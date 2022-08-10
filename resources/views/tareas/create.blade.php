<x-layouts.app title="Crear nueva tarea">
    <h1>Crear nueva Tarea</h1>
    <form method="POST" action="{{ route('tareas.store')}}">
      <x-tarea-form-body />
    </form>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <a href ="{{ route('tareas.index') }}">Regresar</a>
</x-layouts.app>
