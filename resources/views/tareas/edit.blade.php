<x-layouts.app :title="$tarea->nombre">
    <h1>Formulario de Edicion de  la tarea <i>{{ $tarea->nombre }}</i></h1>
    <form method="POST" action="{{route('tareas.update',$tarea)}}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <label for="InputNombre" class="form-label">Nombre de la Tarea</label>
                    <input type="text" class="form-control" id="InputNombre" name="nombre" value="{{ old('nombre') }}">
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox"  name="finalizada" id="InputFinalizada" class="form-check-input" @checked( old('finalizada'))>
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
                    <script>
                        document.getElementById('SelectUrgencia').value = "{{ old('urgencia') }}";
                        </script>
                </div>
                <div class="col-sm-4">
                    <label for="InputFechaLimite" class="form-label">Fecha de Limite</label>
                    <input type="datetime-local" name="fecha_limite"  id="InputFechaLimite" class="form-control"  value="{{ old('fecha_limite') }}">
                </div>
                <div class="col-sm-12">
                    <label for="TextAreaDescripcion" class="form-label">Descripcion</label>
                    <textarea name="descripcion" class="form-control" id="TextAreaDescripcion" cols="30" rows="10">{{ old('descripcion') }}</textarea>
                </div>
                
                <div class="col-sm-12 text-end my-2">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
    
            </div>
    </form>
</x-layouts.app>
