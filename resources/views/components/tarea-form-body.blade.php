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
    <div class="mb-3 form-check ">
        <input class="form-check-input" id="InputFinalizada" type="checkbox"  @checked(old('finalizada', $tarea->finalizada)) >
        <label class="form-check-label" for="InputFinalizada">FINALIZADA</label>
        
    </div>
    <div class="mb-3 ">
        <label for="InputFecha" class="form-label">Fecha de Limite</label>
        <input type="datetime-local" name="fecha_limite"  id="InputFecha"  value={{old('fecha_limite',$tarea->fecha_limite)}}>
    </div>
    <div class="mb-3 ">
        <label for="SelectUrgencia" class="form-label">Urgencia:</label>
        <select class="form-select" aria-label="Default select example" name="urgencia" id="SelectUrgencia">
            @for($x = 0; $x < count($urgencias);$x++)
                <option value="{{ $x }}" @selected(old('urgencia',$tarea->urgencia))>{{ $urgencias[$x] }}</option>

            @endfor
            
        </select>
    </div>
</div>
