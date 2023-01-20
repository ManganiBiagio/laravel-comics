@extends('layouts.app')

@section('content')
  <h1>Benventuo sul mio sito</h1>
  @foreach ($comics as $comic)
      <h6>{{$comic["title"]}}</h6>
  @endforeach
@endsection