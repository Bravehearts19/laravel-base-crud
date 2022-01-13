@extends("layouts.default")

@section("page_title", "Dettagli utente #" . $comic->id)

@section("content")
    <div class="container">
        <ul class="nav justify-content-center mb-5 mt-3 bg-light">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
            </li>

            <li class="nav-item">
                @include('partials.delete_btn')
            </li>
        </ul>


        @if(session("msg"))
            <div class="alert alert-success">{{session("msg")}}</div>
        @endif

        <h1>Fumetto: <span id="comicTitle">{{ $comic->title }}</span></h1>
        <h3>Descrizione: {{$comic->description}} </h3>

    </div>
@endsection