@extends('layouts.app')

@section('title', 'Homepage')
<div class="container">
  <div class="row g-2">
    @foreach($movies as $movie)
    <div class="col-4">
      <div class="card p-2">
        <span>ID:{{ $movie['id'] }}</span><br>
        <span>Titolo:{{ $movie['title'] }}</span><br>
        <span>Titolo Originale:{{ $movie['original_title'] }}</span><br>
        <span>Lingua:{{ $movie['nationality'] }}</span><br>
        <span>Data:{{ $movie['date'] }}</span><br>
        <span>Voto:{{ $movie['vote'] }}</span><br>
      </div>
    </div>
    @endforeach
  </div>
  @section('main-content')

  @endsection