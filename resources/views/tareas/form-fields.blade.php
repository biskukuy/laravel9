<div class="container">
        <div class="mb-3">
            <label for="InputNombre" class="form-label">Nombre de la Tarea</label>
            <input type="text" class="form-control" id="InputNombre" aria-describedby="nombreHelp" name="nombre" value={{old('nombre',$tarea->nombre)}}>
            <div id="nombreHelp" class="form-text">Debes colocar un nombre</div>
            @error('nombre')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="InputDescripcion" class="form-label">Descripcion</label>
            <textarea name="descripcion" class="form-control">{{old('descripcion',$tarea->descripcion)}}</textarea>
            @error('descripcion')
            <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 form-check form-switch">
            <input class="form-check-input" id="InputFinalizada" type="checkbox" role="switch" @checked(old('finalizada', $tarea->finalizada)) >
            <label class="form-check-label" for="InputFinalizada">Finalizada</label>
            
        </div>
        <div class="mb-3 ">
            <label for="InputFecha" class="form-label">Fecha de Limite</label>
            <input type="datetime-local" name="fecha_limite"  id="InputFecha"  value={{old('fecha_limite',$tarea->fecha_limite->format('Y-m-d\TH:i'))}}>
        </div>
        <div class="mb-3 ">
            <label for="SelectUrgencia" class="form-label">Urgencia:</label>
            <select class="form-select" aria-label="Default select example" name="urgencia" id="SelectUrgencia">
                <option value=0 selected>No es Urgente</option>
                <option value=1>Urgencia Normal</option>
                <option value=2>Muy Urgente</option>
            </select>
            <script> 
                document.getElementById('SelectUrgencia').value = "{{ old('urgencia', $tarea->urgencia) }}";  
            </script>
        </div>
</div>
