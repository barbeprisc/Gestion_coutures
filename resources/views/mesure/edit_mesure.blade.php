@extends('layouts.main')
@section('content')
<div class="nic_bg">
    <div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded">MODIFIER LES MESURES</h2>
    <form method="POST" class="shadow p-3 mb-3 bg-body rounded nic_bg1" action="{{ route('gestion_mesure.update', [$finds->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="d-flex">
        <div class="col-lg-4 col-sm-4 me-2 container">
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Dos</label>
              <input type="text" class="form-control" value="{{ $finds->dos }}" name="dos" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Epaule</label>
              <input type="text" class="form-control" value="{{ $finds->epaule }}" name="epaule" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Poitrine</label>
              <input type="text" class="form-control" value="{{ $finds->poitrine }}" name="poitrine" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Long_manche</label>
              <input type="text" class="form-control" value="{{ $finds->long_manche }}" name="long_manche" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Tour_manche</label>
              <input type="text" class="form-control" value="{{ $finds->tour_manche }}" name="tour_manche" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Long_taille</label>
              <input type="text" class="form-control" value="{{ $finds->long_taille }}" name="long_taille" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 me-2 container">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Tour_taille</label>
              <input type="text" class="form-control" name="tour_taille" value="{{ $finds->tour_taille}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Pinces</label>
              <input type="text" class="form-control" name="pinces" value="{{ $finds->pinces}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Long_camisole</label>
              <input type="text" class="form-control" name="long_camisole" value="{{ $finds->long_camisole}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Long_robe</label>
              <input type="text" class="form-control" value="{{ $finds->long_robe }}" name="long_robe" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Long_chemise</label>
              <input type="text" class="form-control" value="{{ $finds->long_chemise }}" name="long_chemise" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Ceinture</label>
              <input type="text" class="form-control" value="{{ $finds->ceinture }}" name="ceinture" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 me-2 container">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Bassin</label>
              <input type="text" class="form-control" name="bassin" value="{{ $finds->bassin}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Cuisse</label>
              <input type="text" class="form-control" name="cuisse" value="{{ $finds->cuisse}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Genoux</label>
              <input type="text" class="form-control" name="genoux" value="{{ $finds->genoux}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Long_jupe</label>
              <input type="text" class="form-control" value="{{ $finds->long_jupe }}" name="long_jupe" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Long_pantalon</label>
              <input type="text" class="form-control" value="{{ $finds->long_pantalon }}" name="long_pantalon" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-light">Bas</label>
              <input type="text" class="form-control" value="{{ $finds->bas }}" name="bas" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
      </div>
        <div class="container d-flex">
            <button type="submit" class="btn btn-success me-5 text-light">Modifier</button>
            <a class="" style="color: black;" href="{{route('gestion_mesure.index') }}">
                <button type="submit" class="btn btn-danger">Retour à la liste</button>
            </a>
        </div>
    </form>
</div>
</div>

@endsection



