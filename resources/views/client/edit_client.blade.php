@extends('layouts.main')
@section('content')
<div class="nic_bg">
    <div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded">MODIFIER UN CLIENT</h2>
    <form method="POST" class="shadow p-3 mb-3 bg-body rounded nic_bg1" action="{{ route('gestion_client.update', [$finds->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="d-flex">
        <div class="col-lg-6 col-sm-6 me-2 container">
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Nom</label>
              <input type="text" class="form-control" value="{{ $finds->nom }}" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Prénom</label>
              <input type="text" class="form-control" value="{{ $finds->prenom }}" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label class="col-sm-3 control-label">Sexe</label>
              <div class="col-sm-12">
                  <select class="form-select" type="text" aria-label="Default select example" value="{{ $finds->sexe }}" name="sexe">
                      <option selected> Sexe </option>
                      <option value="Masculin">Masculin</option>
                      <option value="Feminin">Feminin</option>
                  </select>
              </div>
           </div>
        </div>
        <div class="col-lg-6 col-sm-6 me-2 container">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Telephone</label>
              <input type="number" class="form-control" name="telephone" value="{{ $finds->telephone}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Adresse</label>
              <input type="text" class="form-control" name="adresse" value="{{ $finds->adresse}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Email</label>
              <input type="text" class="form-control" name="email" value="{{ $finds->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
      </div>
        <div class="container d-flex">
            <button type="submit" class="btn btn-success me-5 text-light">Modifier</button>
            <a class="" style="color: black;" href="{{route('gestion_client.index') }}">
                <button type="submit" class="btn btn-danger">Retour à la liste</button>
            </a>
        </div>
    </form>
</div>
</div>

@endsection



