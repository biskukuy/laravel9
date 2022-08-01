
<div class="container">

    <form>
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
        <div class="mb-3 form-check">
            <div class="form-check form-switch">
                <input class="form-check-input" id="InputFinalizada" type="checkbox" role="switch" @checked(old('finalizada', $tarea->finalizada)) >
                <label class="form-check-label" for="InputFinalizada">Finalizada</label>
            </div>
                    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
<label> 
    <br>
    
    
</label><br>
<label> 
    Fecha de Limite<br>
    <input type="datetime-local" name="fecha_limite" value={{old('fecha_limite',$tarea->fecha_limite->format('Y-m-d\TH:i'))}}>
</label><br>
<label> 
    Urgencia:<br>
    <select name="urgencia" id="SelectUrgencia" class="form-select">
        <option value=0 selected>No es Urgente</option>
        <option value=1>Urgencia Normal</option>
        <option value=2>Muy Urgente</option>
    </select>
    <script> 
        document.getElementById('SelectUrgencia').value = "{{ old('urgencia', $tarea->urgencia) }}";  
    </script> 
    
   
</label><br>
