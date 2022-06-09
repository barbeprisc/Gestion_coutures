@extends('layouts.main')
@section('content')

<div class="nic_bg " style="height: 520px;">
<h1 class="text-center bg-light">DETAILS MODEL <strong style="color: blue;">{{$finds->nom_mod}}</strong></h1>

<div class="card m-3" style="max-width: 540px;" onload="window.print()">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('storage').'/'.$finds->photo }}" style="width: 100%" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color: red;">COUTURE LUX DU FASO</h5>
        <p class="card-text">Nom : <strong style="color: blue;">{{$finds->nom}}</strong></p>
      </div>
    </div>
  </div>
</div>
<a href="" class="m-3"><button class="btn btn-primary me-md-2" type="button">Imprimer</button></a>
</div>

@endsection
