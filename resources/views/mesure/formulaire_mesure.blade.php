@extends('layouts.main')
@section('content')
<div class="nic_bg" style="height: 520px; ">
  <div class="container">
    <div class="m-2"><h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded" style="font-family: Algerian; text-align: center; color: blue">FORMULAIRE POUR AJOUTER LES MESURES</h2></div>
    <form method="POST" class="shadow p-3 mb-2 bg-body rounded nic_bg1" action="{{route('gestion_mesure.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="d-flex">
        <div class="col-lg-4 col-sm-4 me-2 container">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Dos</label>
              <input type="text" class="form-control" name="dos" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Epaule</label>
              <input type="text" class="form-control" name="epaule" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Poitrine</label>
              <input type="text" class="form-control" name="poitrine" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
           <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Long_manche</label>
              <input type="text" class="form-control" name="long_manche" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tour_manche</label>
              <input type="text" class="form-control" name="tour_manche" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Long_taille</label>
              <input type="text" class="form-control" name="long_taille" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 me-2 container">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tour_taille</label>
              <input type="text" class="form-control" name="tour_taille" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Pinces</label>
              <input type="text" class="form-control" name="pinces" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Long_camisole</label>
              <input type="text" class="form-control" name="long_camisole" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Long_robe</label>
              <input type="text" class="form-control" name="long_robe" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Long_chemise</label>
              <input type="text" class="form-control" name="long_chemise" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Ceinture</label>
              <input type="text" class="form-control" name="ceinture" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 me-2 container">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Bassin</label>
              <input type="text" class="form-control" name="bassin" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Cuisse</label>
              <input type="text" class="form-control" name="cuisse" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Genoux</label>
              <input type="text" class="form-control" name="genoux" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Long_jupe</label>
              <input type="text" class="form-control" name="long_jupe" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Long_pantalon</label>
              <input type="text" class="form-control" name="long_pantalon" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		  <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Bas</label>
              <input type="text" class="form-control" name="bas" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
      </div>
      <div class="container d-flex" style="text-align: center;">
        <button type="submit" class="btn btn-primary me-5">Valider</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
      </div>
    </form>
  </div>
</div>
@endsection
