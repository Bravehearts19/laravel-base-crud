@extends("layouts.default")

@section("page_title", "Nuovo utente")

@section("content")
    <div class="container">
        <h1>Aggiornamento dati <strong>{{ $comic->title }}</strong></h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <h3>Ci sono errori nel form:</h3>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route("comics.update", $comic->id)  }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="field_title" class="form-label">Titolo</label>
                <input type="text" class="form-control {{ $errors->has("title") ? 'is-invalid' : '' }}" name="title" id="field_title" value="{{ old('title') }}">

                @if($errors->has("title"))
                    <div class="invalid-feedback">
                        <span>{{ $errors->get("title")[0]}}</span>
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="field_description" class="form-label">Descrizione</label>
                <input type="text" class="form-control {{ $errors->has("description") ? 'is-invalid' : '' }}" name="description" id="field_description" value="{{ old('description') }}">

                @if($errors->has("description"))
                    <div class="invalid-feedback">
                        <span>{{ $errors->get("description")[0]}}</span>
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="field_series" class="form-label">Saga</label>
                <input type="series" class="form-control {{ $errors->has("series") ? 'is-invalid' : '' }}" name="series" id="field_series">
                
                @if($errors->has("series"))
                    <div class="invalid-feedback">
                        <span>{{ $errors->get("series")[0]}}</span>
                    </div>
                @endif
            </div>

            <div>
                <button class="btn btn-secondary" type="reset ">Reset</button>
                <button class="btn btn-success" type="submit">Crea</button>
            </div>
        </form>
    </div>
@endsection