@extends('layouts.app')
@section('titolo', 'Studenti')

@section('main')

<div class="card-group">
  @foreach ($data as $student)


  <div class="card">
    <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  @endforeach
</div>

@endsection
