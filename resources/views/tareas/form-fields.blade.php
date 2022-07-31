<label> 
    Nombre de la Tarea<br>
    <input type="text" name="nombre" value={{old('nombre',$tarea->nombre)}}>
    @error('nombre')
        <br>
        <small style="color:red">{{ $message }}</small>
    @enderror
</label><br>
<label> 
    Descripcion<br>
    <textarea name="descripcion">{{old('descripcion',$tarea->descripcion)}}</textarea>
    @error('descripcion')
    <br>
    <small style="color:red">{{ $message }}</small>
@enderror
</label><br>
<div class="form-check">
    <input type="checkbox" name="finalizada" class="form-check-input" id="InputFinalizada"
     @checked(old('finalizada', $tarea->finalizada))>
    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
</div>
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
