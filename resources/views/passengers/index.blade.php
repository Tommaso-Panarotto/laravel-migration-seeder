@extends("layouts.app")

@section("head-title", "Trains")

@section("main-content")
<div class="container text-center">
<h2>Passengers</h2>
<div class="row g-3 mt-5">
@forelse ($passengers as $passenger )
<div class="col-4">
    <div class="card" >
      <h4>{{$passenger->name}} {{$passenger->surname}}</h4>
    </div>
  </div>

@empty
    <div class="col-12">
        <h2>Non ci sono passegeri in partenza....</h2>
    </div>
@endforelse
</div>
</div>
@endsection
