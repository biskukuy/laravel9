<x-layouts.app title="Crear nueva tarea">
    <h1>Crear nueva Tarea</h1>
    <form method="POST" action="{{ route('tareas.store')}}">
        @csrf
        <div class="container">
        <div class="mb-3">
            <label for="InputNombre" class="form-label">Nombre de la Tarea</label>
            <input type="text" class="form-control" id="InputNombre" aria-describedby="nombreHelp" name="nombre" >
            <div id="nombreHelp" class="form-text">Debes colocar un nombre</div>
        </div>
        <div class="mb-3">
            <label for="InputDescripcion" class="form-label">Descripcion</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="mb-3 form-check ">
            <input class="form-check-input" id="InputFinalizada" type="checkbox"   >
            <label class="form-check-label" for="InputFinalizada">FINALIZADA</label>
            
        </div>
        <div class="mb-3 ">
            <label for="InputFecha" class="form-label">Fecha de Limite</label>
            <input type="datetime-local" name="fecha_limite"  id="InputFecha"  >
        </div>
        <div class="mb-3 ">
            <label for="SelectUrgencia" class="form-label">Urgencia:</label>
            <select class="form-select" aria-label="Default select example" name="urgencia">
                <option VALUE="0" >BAJA</option>
                <option VALUE="1" >MEDIA</option>
                <option VALUE="0" >ALTA</option>
            </select>
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </div>
    </form>
    <br>

   <a href ="{{ route('tareas.index') }}">Regresar</a>
</x-layouts.app>
