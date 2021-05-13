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
    <div class="container-detail-down-left">

    </div>
    <div class="container-detail-down-right">

    </div>
   </div>

 </section>
@endsection
