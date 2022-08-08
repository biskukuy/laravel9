<x-layouts.app title="Crear nueva tarea">
    <h1>Crear nueva Tarea</h1>
    <form method="POST" action="{{ route('tareas.store')}}">
        @csrf
      <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">Nombre de la Tarea</label>
                <input type="text" class="form-control" id="InputNombre" name="nombre" >
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox"  name="finalizada" id="InputFinalizada" class="form-check-input">
                    <label for="InputFinalizada" class="form-check-label">FINALIZADA</label>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="SelectUrgencia" class="form-label">Urgencia:</label>
                <select name="urgencia" id="SelectUrgencia" class="form-select">
                    <option VALUE="0">BAJA</option>
                    <option VALUE="1">NORMAL</option>
                    <option VALUE="2">ALTA</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">Fecha de Limite</label>
                <input type="datetime-local" name="fecha_limite"  id="InputFechaLimite" class="form-control"  >
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">Descripcion</label>
                <textarea name="descripcion" class="form-control" id="TextAreaDescripcion" cols="30" rows="10"></textarea>
            </div>
            
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>

        </div>
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
