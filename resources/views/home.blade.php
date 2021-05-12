@extends('layouts.app')

@section('main')
<p>home</p>
<div class="container-card">
  @foreach ($comics as $comic)
    <div class="card">
      <div class="container-img" style="background-image: url('{{ $comic['thumb'] }}')" >
      </div>
      <p>{{ $comic['series'] }}</p>
    </div>
  @endforeach
</div>

@endsection
