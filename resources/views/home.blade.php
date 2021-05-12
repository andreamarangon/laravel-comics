@extends('layouts.app')

@section('main')
<p>home</p>
@foreach ($comics as $comic)
  <p>{{ $comic['title'] }}</p>
@endforeach
@endsection
