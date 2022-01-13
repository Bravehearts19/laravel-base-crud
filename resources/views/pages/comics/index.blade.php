@extends("layouts.default")

@section("page_title", "Laravel Base Crud")

@section("content")
    <div class="container">
        <h1 class="text-center">Ecco i nostri fumetti:</h1>
            
        <ul class="nav justify-content-center mb-5 mt-3 bg-light">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
            </li>
        </ul>

        @if(session("msg"))
            <div class="alert alert-success">{{session("msg")}}</div>
        @endif

        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src="{{ $comic->thumb ?? 'https://picsum.photos/200' }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic["title"] }}</h5>
                            
                            <p class="card-text">{{ $comic->description }}</p>

                            <a href="{{ route('comics.show', $comic->id) }}" class="card-link">Dettagli</a>

                            <a href="{{ route('comics.edit', $comic->id) }}" class="card-link">Modifica</a>

                            @include('partials.delete_btn')
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection