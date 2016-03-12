@extends('layouts.master')

@section('title', 'Index')

@section('sidebar')
    @parent

    <p>------------Nav----------</p>
@endsection

@section('content')
    <p>This is my body content.</p>

    @foreach ($movies as $movie)
      <p>This is movie {{ $movie->name }}</p>
      <a href="/vote/{{ $movie->id }}">Votar!</a>
    @endforeach


@endsection
