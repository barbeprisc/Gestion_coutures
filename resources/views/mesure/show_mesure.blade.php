@extends('layouts.main')
@section('content')

<div class="nic_bg " style="height: 520px;">
<h1 class="text-center bg-light">DETAILS MESURES <strong style="color: blue;"></strong></h1>

<div class="card m-3" style="max-width: 540px;" onload="window.print()">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color: red;">COUTURE LUX DU FASO</h5
        <p class="card-text">Dos : <strong style="color: blue;">{{$finds->dos}}</strong></p>
        <p class="card-text">epaule : <strong style="color: blue;">{{$finds->epaule}}</strong></p>
        <p class="card-text">poitrine : <strong style="color: blue;">{{$finds->poitrine}}</strong></p>
        <p class="card-text">long_manche : <strong style="color: blue;">{{$finds->long_manche}}</strong></p>
        <p class="card-text">tour_manche : <strong style="color: blue;">{{$finds->tour_manche}}</strong></p>
        <p class="card-text">long_taille : <strong style="color: blue;">{{$finds->long_taille}}</strong></p>
        <p class="card-text">tour_taille : <strong style="color: blue;">{{$finds->tour_taille}}</strong></p>
        <p class="card-text">pinces : <strong style="color: blue;">{{$finds->pinces}}</strong></p>
        <p class="card-text">long_camisole : <strong style="color: blue;">{{$finds->long_camisole}}</strong></p>
        <p class="card-text">long_robe : <strong style="color: blue;">{{$finds->long_robe}}</strong></p>
        <p class="card-text">long_chemise : <strong style="color: blue;">{{$finds->long_chemise}}</strong></p>
        <p class="card-text">ceinture : <strong style="color: blue;">{{$finds->ceinture}}</strong></p>
        <p class="card-text">bassin : <strong style="color: blue;">{{$finds->bassin}}</strong></p>
        <p class="card-text">cuisse : <strong style="color: blue;">{{$finds->cuisse}}</strong></p>
        <p class="card-text">genoux : <strong style="color: blue;">{{$finds->genoux}}</strong></p>
        <p class="card-text">long_jupe : <strong style="color: blue;">{{$finds->long_jupe}}</strong></p>
        <p class="card-text">long_pantalon : <strong style="color: blue;">{{$finds->long_pantalon}}</strong></p>
        <p class="card-text">bas : <strong style="color: blue;">{{$finds->bas}}</strong></p>
      </div>
    </div>
  </div>
</div>
<a href="" class="m-3"><button class="btn btn-primary me-md-2" type="button">Imprimer</button></a>
</div>

@endsection