@extends('layouts.app')

@section('main')
 <section class="detail-up">
   <div class="container-detail-up">
     <img src="{{ $comic['thumb'] }}" alt="">
   </div>
 </section>
 <section class="detail-center pb-10">
   <div class="detail-center-left pt-10">
     <h1 class="text-uppercase">{{ $comic['title'] }}</h1>
     <div class="container-green mt-3">
      <div class="container-green-left">
        <span>U.S. Price:{{ $comic['price'] }}</span>
        <span class="text-uppercase">available</span>
      </div>
      <div class="container-green-right">Check Availability<i class="fas fa-sort-down"></i></div>
    </div>
    <p class="mt-2">{{ $comic['description'] }}</p>
   </div>
   <div class="detail-center-right pt-8">
    <span class="text-uppercase">advertisement</span>
    <img src="/img/adv.jpg" alt="">
   </div>
 </section>
 <section class="detail-down">
   <div class="container-detail-down">
    <div class="container-detail-talent">
      <h2>Talent</h2>
      <div class="art-by">
        <span>Art by:</span>
        @foreach ($comic['artists'] as $artist)
        <p>{{ $artist}}</p>
        @endforeach
      </div>
      <div class="written-by">
        <span>Written by:</span>
        @foreach ($comic['writers'] as $writer)
        <p>{{ $writer}}</p>
        @endforeach
      </div>
    </div>
    <div class="container-detail-specs">
      <h2>Specs</h2>
      <div class="series">
        <span>Series:</span>
        <p>{{ $comic['series'] }}</p>
      </div>
      <div class="us-price:">
        <span>U.S. Price:</span>
        <p>{{ $comic['price'] }}</p>
      </div>
      <div class="on-sale-date">
        <span>On Sale Date</span>
        <p>{{ $comic['sale_date'] }}</p>
      </div>
    </div>
   </div>

 </section>
@endsection
