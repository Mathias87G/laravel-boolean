@extends('layouts.app')
@section('titolo', 'Home')

@section('main')
  <div class="container">
    <div class="row home-ctr">
      <div class="col-md-6">
        <h1>Cambia la tua vita. <br> Entra in Boolean.</h1>
        <h4>Segui il corso, diventi un web developer e trovi lavoro.</h4>
        <ul>
          <li>6 mesi di corso full time, online e in diretta</li>
          <li>Nessuna competenza di programmazione richiesta</li>
          <li>Se non trovi lavoro ti rimborsiamo</li>
        </ul>
        <button type="button" class="btn btn-success">Candidati ora</button>
      </div>
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/59zORE5buOo" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection
