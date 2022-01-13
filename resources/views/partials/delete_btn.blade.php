<form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="form-delete">
    
    @csrf
    @method('delete')
  
    <input type="hidden" name="comicTitle" value="{{ $comic->title }}">
  
    <button type="submit" class="nav-link active btn btn-link text-danger">Elimina</button>
</form>
  