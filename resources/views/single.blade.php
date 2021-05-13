@extends('layouts.app')

@section('main')
 <section class="detail-up">
  <div class="">
  </div>
 </section>
 <section class="detail-center">
   <div class="detail-center-left pt-10">
     <h1>{{ $comic['title'] }}</h1>
     <div class="container-green">
      <div class="container-green-left">
        <span>U.S. Price:{{ $comic['price'] }}</span>
        <span class="text-uppercase">available</span>
      </div>
      <div class="container-green-right">Check Availability<i class="fas fa-sort-down"></i></div>
    </div>
    <p>{{ $comic['description'] }}</p>
   </div>
   <div class="detail-center-right pt-8">
    <span class="text-uppercase">advertisement</span>
    <img src="/img/adv.jpg" alt="">
   </div>
 </section>
 <section class="detail-down">

 </section>
@endsection
