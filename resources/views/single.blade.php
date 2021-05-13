@extends('layouts.app')

@section('main')
 <section class="detail-up">
  <div class="">
  </div>
 </section>
 <section class="detail-center">
   <div class="detail-center-left">
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
   <div class="detail-center-right">

   </div>
 </section>
 <section class="detail-down">

 </section>
@endsection
