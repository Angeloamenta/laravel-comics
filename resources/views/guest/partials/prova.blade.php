@extends('guest.layout.base')

@section('documentTitle')
    Prova
@endsection

@section('content')
    <div class="container">
        @foreach ($comics as $comic)
            <div>
                {{$comic['description']}}
            </div>
        @endforeach
    </div>
    <h1>Prova</h1>
@endsection