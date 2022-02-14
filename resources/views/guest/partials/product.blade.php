@extends('guest.layout.base')

@section('docTitle')
    {{$nomeComic}}
@endsection

@section('content')
<div class="blue-line">
    <div class="container-blue">
        <img src="{{$product['thumb']}}" alt="">
    </div>
</div>
  <div class="comics-one-top">
      <div class="container">
          <div class="description-title">
              <h2>{{$product['title']}}</h2>
          </div>
          <div class="desc-container">
              <div class="description">
                  {{-- riga verde --}}
                  <div class="price-available">
                      <div class="available">
                          <div>
                              <span>U.S Price:</span> {{$product['price']}}
                          </div>
                          <div>
                              <span>
                                  AVAILABLE
                              </span>
                          </div>
                      </div>
                      <div class="check">
                        Check Availability>
                      </div>
                  </div>
                  {{-- descrizione --}}
                  <div class="inner-description">
                      {{$product['description']}}
                  </div>
              </div>
              <div class="advertisement">
                  <div>
                      <h4>ADVERTISEMENT</h4>
                  </div>
                  <div>
                      <img src="{{asset('/images/dc-logo.png')}}" alt="">
                    </div>
              </div>
          </div>
      </div>
  </div>
  <div class="comics-one-bottom">

  </div>

@endsection