@extends('layouts.main')
@section('content')
<div class="nic_bg">
    <div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded">MODIFIER UN MODELE</h2>
    <form method="POST" class="shadow p-3 mb-3 bg-body rounded nic_bg1" action="{{ route('gestion_modele.update', [$finds->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="d-flex">
        <div class="col-lg-6 col-sm-6 me-2 container">
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Nom_mod</label>
              <input type="text" class="form-control" value="{{ $finds->nom_mod }}" name="nom_mod" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" value="{{ $finds->photo }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="container d-flex">
            <button type="submit" class="btn btn-success me-5 text-light">Modifier</button>
            <a class="" style="color: black;" href="{{route('gestion_modele.index') }}">
                <button type="submit" class="btn btn-danger">Retour à la liste</button>
            </a>
        </div>
    </form>
</div>
</div>

@endsection



