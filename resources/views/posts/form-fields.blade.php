<div class="container">
    <div class="mb-3">
        <label for="InputNombre" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="InputNombre" aria-describedby="nombreHelp" name="title" value={{old('title',$post->title)}}>
        <div id="nombreHelp" class="form-text">Debes colocar un Titulo</div>
        @error('title')
        <br>
        <small style="color:red">{{ $message }}</small>
    @enderror
    </div>
</div>

<label> 
    Body<br>
    <textarea name="body">{{old('body',$post->body)}}</textarea>
    @error('body')
    <br>
    <small style="color:red">{{ $message }}</small>
@enderror
</label><br>
