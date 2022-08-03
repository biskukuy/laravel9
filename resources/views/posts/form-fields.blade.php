<div class="container">
    <div class="mb-3">
        <label for="InputNombre" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="InputNombre" aria-describedby="nombreHelp" name="title" value={{old('title',$post->title)}}>
        @error('title')
        <br>
        <small style="color:red">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="InputDescripcion" class="form-label">Body</label>
        <textarea name="body" class="form-control">{{old('body',$post->body)}}</textarea>
        @error('body')
        <small style="color:red">{{ $message }}</small>
        @enderror
    </div>
</div>
