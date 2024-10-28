@extends("layouts.app")

@section("head-title", "Trains")

@section("main-content")
<div class="container text-center">
<h2>Monitor</h2>
<div class="row g-3">
@forelse ($trains as $train )
<div class="col-4">
    <div class="card" >
    <h4>{{$train->train_cd}}</h4>
    <div class="card-body">
        <h5 class="card-title">Data</h5>
        <p class="card-text">{{$train->date}}</p>
      <h5 class="card-title">Stazioni</h5>
      <div class="stations d-flex justify-content-center"><p class="card-text">Partenza: {{$train->station_departure}}</p>---<p class="card-text">Arrivo: {{$train->station_arrive}}</p></div>
      <h5 class="card-title">orari</h5>
      <div class="stations d-flex justify-content-center"><p class="card-text">Partenza: {{$train->hour_departure}}</p>---<p class="card-text">Arrivo: {{$train->hour_arrive}}</p></div>

    </div>
  </div>
</div>
@empty
    <div class="col-12">
        <h2>Non ci sono treni in partenza....</h2>
    </div>
@endforelse
</div>
</div>
@endsection
