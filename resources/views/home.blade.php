@extends('layouts.app')

@section('main')
<section class="comics-section pb-2">
  <div class="container-card pt-6">
    <!-- ciclo la card con un foreach-->
    @foreach ($comics as $index => $comic)
      <div class="card">
        <a href="{{route('detail', ['id' => $index])}}">
          <div class="container-img" style="background-image: url('{{ $comic['thumb'] }}')" >
          </div>
          <h5 class="text-uppercase mt-2">{{ $comic['series'] }}</h5>
        </a>
      </div>
    @endforeach
  </div>
  <div class="my-btn-main">load more</div>
</section>
<section class="shop">

</section>
@endsection
