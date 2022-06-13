@extends('layouts.main')
@section('content')
<div class="nic_bg">
    <div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded">MODIFIER UN PAIEMENT</h2>
    <form method="POST" class="shadow p-3 mb-3 bg-body rounded nic_bg1" action="{{ route('gestion_payement.update', [$finds->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
           <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Client</label>
                <select class="form-control" name="clients_id" id="">
                    @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Modele</label>
                <select class="form-control" name="modeles_id" id="">
                     @foreach($modeles as $modele)
                        <option value="{{$modele->id}}">{{$modele->nom_mod}}</option>
                    @endforeach
                </select>
            </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Prix total</label>
              <input type="number" class="form-control" value="{{ $finds->prix_total }}" name="prix_total" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Avance</label>
              <input type="number" class="form-control" value="{{ $finds->avance }}" name="avance" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Reste</label>
              <input type="number" class="form-control" name="reste" value="{{ $finds->reste}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="container d-flex">
            <button type="submit" class="btn btn-success me-5 text-light">Modifier</button>
            <a class="" style="color: black;" href="{{route('gestion_payement.index') }}">
                <button type="submit" class="btn btn-danger">Retour à la liste</button>
            </a>
        </div>
    </form>
</div>
</div>

@endsection



