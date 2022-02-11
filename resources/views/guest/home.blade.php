{{-- @php
    dd($comics);
@endphp --}}
@extends('guest.layout.base')

@section('docTitle')
    Home - DC
@endsection

@section('content')
  <main>
    <div class="main-top">
        <div class="container">
            <div class="elements">
               @foreach ($comics as $comic)
               <div class="element">
                <div class="element-img">
                <img src="{{$comic['thumb']}}" alt="">
                </div>
                <p>{{$comic['title']}}</p>
            </div>     
               @endforeach
        </div>
          </div>
          <div class="main-bottom">
              <div class="container">
              <ul class="list-none">
                  
              </ul>
              </div>
          </div>
  </main>
@endsection

