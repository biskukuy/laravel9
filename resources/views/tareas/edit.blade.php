<x-layouts.app :title="$tarea->nombre">
    <h1>Formulario de Edicion</h1>
    <form method="POST" action="{{route('tareas.update',$tarea)}}">
        @csrf
        @method('PATCH')
        <x-tarea-form-body :tarea="$tarea" />
        
     
        <div class="container">
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Procesar</button>
                <a class="btn btn-success" href ="{{route('tareas.index')}}">Regresar</a>
            </div>
        </div>
    </form>
</x-layouts.app>
