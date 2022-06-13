@extends('layouts.main')
@section('content')

<div class="b_contact container-fluid d-flex nic_cont">
        <div class="col-lg-6 col-sm-6">
            <h3>Localisation</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.095979114309!2d-1.5026646857727357!3d12.376502831006311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe47e1af9855%3A0x1278af12903c216!2sCampus%20Num%C3%A9rique%20Francophone%20de%20Ouagadougou%20(AUF%20OUAGA)!5e0!3m2!1sfr!2sbf!4v1645628158442!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-lg-6 col-sm-6 m-2">
          <div class="me-2"><h3 style="color: white;">Contactez-nous</h3>
          </div>
            <form action="" style="margin: 3px;">
              <div class="d-flex">
                <div class="mb-3 me-2">
                  <input type="text" class="form-control b_champ" id="exampleFormControlInput1" placeholder="NOM*" style="border-collapse: collapse;">
                </div>
                <div>
                  <input type="text" class="form-control b_champ" id="exampleFormControlInput1" placeholder="PRENOM*">
                </div>
              </div>
              <div class="d-flex mb-3">
                <div class="me-2">
                  <input type="number" class="form-control b_champ" id="exampleFormControlInput1" placeholder="TELEPHONE*">
                </div>
                <div>
                  <input type="email" class="form-control b_champ" id="exampleFormControlInput1" placeholder="EMAIL*">
                </div>
              </div>
              <div class="d-flex mb-3">
                <div class="me-2">
                  <input type="text" class="form-control b_champ" id="exampleFormControlInput1" placeholder="ADRESSE*">
                </div>
                <div>
                  <input type="text" class="form-control b_champ" id="exampleFormControlInput1" placeholder="SUJET*">
                </div>
              </div>
              <div class="d-flex mb-3">
                <div class="me-2">
                  <input type="text" class="form-control b_champ" id="exampleFormControlInput1" placeholder="DATE DE NAISSANCE*">
                </div>
                <div>
                  <input type="text" class="form-control b_champ" id="exampleFormControlInput1" placeholder="SEXE*">
                </div>
              </div>
              <div class="col-md mb-3 me-2">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                    <option selected>Africain</option
                    <option value="1">Gucci</option>
                    <option value="2">lacost</option>
                    <option value="3">pouma</option>
                    <option value="4">yako</option>
                    <option value="5">levis</option>
                    <option value="6">man</option>
                    <option value="7">jolie</option>
                    <option value="8">Bloc opératoire</option>
                    <option value="9">Kinestherapie</option>
                    <option value="10">Accueil</option>
                    <option value="11">Administration</option>
                    <option value="12">Comptabilité</option>
                    <option value="13">Hospitalisation</option>
                    <option value="14">Ophtamologie</option>
                    <option value="15">Dentisterie</option>
                  </select>
                  <label for="floatingSelectGrid">Choisir le service :</label>
                </div>
              </div>
              <div class="mb-3 me-2">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="MESSAGE*" rows="8"></textarea>
                <a class="nav-link text-light d-flex" href="#">
                  <button type="button" class="btn" style="color: white; background-color: red;">ENVOYER</button>
                </a>
              </div>
            </form>
        </div>
    </div>

@endsection