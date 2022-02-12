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
            <div class="button-main">
                <button>LOAD MORE</button>
            </div>
        </div>
    </div>
    </div>
    <div class="main-bottom">
       <div class="container">
       <ul class="list-none">
           <li>
               <img src="{{asset('/images/buy-comics-digital-comics.png')}}" alt="">
               <p>DIGITAL COMICS</p>
           </li>

           <li>
               <img src="{{asset('/images/buy-comics-merchandise.png')}}" alt="">
               <p>DC MERCHANDISE</p>
           </li>

           <li>
               <img src="{{asset('/images/buy-comics-subscriptions.png')}}" alt="">
               <p>SUBSCRIPTION</p>
           </li>

           <li>
               <img class="shop" src="{{asset('/images/buy-comics-shop-locator.png')}}" alt="">
               <p>COMIC SHOP LOCATOR</p>
           </li>

           <li>
               <img src="{{asset('/images/buy-dc-power-visa.svg')}}" alt="">
               <p>DC POWER VISA</p>
           </li>
       </ul>
    </div>
  </main>
@endsection

