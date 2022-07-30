<label> 
    Nombre de la Tarea<br>
    <input type="text" name="nombre" value={{old('title',$tarea->nombre)}}>
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
<label> 
    Fecha de Limite<br>
    <input type="date" name="fecha_limite" value={{old('fecha_limite',$tarea->fecha_limite)}}>
    @error('nombre')
        <br>
        <small style="color:red">{{ $message }}</small>
    @enderror
</label><br>
<label> 
    Urgencia:<br>
    <select>
        <option value=0 selected>No es Urgente</option>
        <option value=1>Urgencia Normal</option>
        <option value=2>Muy Urgente</option>
    <input type="date" name="fecha_limite" value={{old('fecha_limite',$tarea->fecha_limite)}}>
    @error('nombre')
        <br>
        <small style="color:red">{{ $message }}</small>
    @enderror
</label><br>
