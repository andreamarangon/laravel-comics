@extends('layouts.app')

@section('main')
<div class="container-card">
  <!-- ciclo la card con un foreach-->
  @foreach ($comics as $index => $comic)
    <div class="card">
      <a href="{{route('detail', ['id' => $index])}}">
        <div class="container-img" style="background-image: url('{{ $comic['thumb'] }}')" >
        </div>
        <h5 class="text-uppercase">{{ $comic['series'] }}</h5>
      </a>
    </div>
  @endforeach
</div>
@endsection
