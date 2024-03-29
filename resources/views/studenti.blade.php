@extends('layouts.app')
@section('titolo', 'Studenti')

@section('main')
<div class="container">
  <div class="card-group d-flex">
    @foreach ($data as $key => $student)
    <div class="card">
      <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
      <div class="card-body">
        <a href="{{ route('Student.slug', ['slug' => $student['slug']]) }}"><h5 class="card-title">{{$student['nome']}}, {{$student['anni']}}</h5></a>
        <h6 class="card-title">{{$student['ruolo']}}</h6>
        {{-- <p class="card-text">{{$student['descrizione']}}</p> --}}
        <p class="card-text"><small class="text-muted">Assunto da: {{$student['azienda']}}</small></p>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
