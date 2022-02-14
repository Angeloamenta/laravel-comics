{{-- @php
 dd($product)   
@endphp --}}
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
      <div class="container-60">
          <div class="description-title">
              <h2>{{$product['title']}}</h2>
          </div>
          <div class="desc-container">
              <div class="description">
                  {{-- riga verde --}}
                  <div class="price-available">
                      <div class="available">
                          <div>
                              <span class="green-t">U.S Price:</span> {{$product['price']}}
                          </div>
                          <div>
                              <span class="green-t">
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
                  <div class="adv-img">
                      <img src="{{asset('/images/adv.jpg')}}" alt="">
                    </div>
              </div>
          </div>
      </div>
  </div>
  <div class="comics-one-bottom">
      <div class="container-60">
          <div class="comics-bottom-sx">
              <div class="comics-title">
                  <h3>Talent</h3>
              </div>
              <div class="art">
                  <div class="artby">
                      <h4>Art By:</h4>
                  </div>
                  <div class="artby-dx">
                      @foreach ($product['artists'] as $artist)
                      <a href="">{{$artist}}</a>
                      @endforeach
                  </div>
              </div>
              <div class="art">
                <div class="writtenby">
                    <h4>Written By:</h4>
                </div>
                <div class="writtenby-dx">
                    @foreach ($product['writers'] as $writer)
                    <a href="">{{$writer}}</a>
                    @endforeach
                </div>
            </div>
          </div>
          <div class="comics-bottom-dx">
            <div class="comics-title">
                <h3>Specs</h3>
            </div>
            <div class="specs-tab">
                <div class="specs-sx">
                        <h4>Series:</h4>
                </div>
                <div class="specs-dx">
                    <a href="">{{$product['series']}}</a>
                </div>
            </div>
            <div class="specs-tab">
                <div class="specs-sx">
                        <h4>U.S Price:</h4>
                </div>
                <div class="specs-dx">
                    {{$product['price']}}
                </div>
            </div>
            <div class="specs-tab">
                <div class="specs-sx">
                        <h4>On Sale Date:</h4>
                </div>
                <div class="specs-dx">
                    {{$product['sale_date']}}
                </div>
            </div>
        </div>
      </div>
      <div class="product-bottom">
          <div class="container-60">
              <div class="card">
                  <div class="card-title">
                      <h4>DIGITAL COMICS</h4>
                  </div>
                  <div class="card-img">
                      <div class="img1">

                      </div>
                  </div>
              </div>
              <div class="card">
                <div class="card-title">
                    <h4>SHOP DC</h4>
                </div>
                <div class="card-img">
                    <div class="img2">

                    </div>
                </div>
             </div>
             <div class="card">
                <div class="card-title">
                    <h4>COMIC SHOP LOCATOR</h4>
                </div>
                <div class="card-img">
                    <div class="img3">

                    </div>
                </div>
             </div>
             <div class="card">
                <div class="card-title">
                    <h4>SUBSCRIPTIONS</h4>
                </div>
                <div class="card-img">
                    <div class="img4">

                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>

@endsection