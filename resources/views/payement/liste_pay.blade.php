@extends('layouts.main')
@section('content')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des payements</h2>
    <a href="{{ route('gestion_payement.create') }}">
        <button type="submit" class="btn btn-outline-primary me-md-2 btn-lg mb-4" name="valider">Nouveau</button>
    </a>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Modele</th>
                <th scope="col">Prix total</th>
                <th scope="col">Avance</th>
                <th scope="col">Reste</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payements as $payement)
            <tr>
                <th scope="row">{{$payement->id}}</th>
                <td>{{$payement->Client->nom}}</td>
                <td>{{$payement->Client->prenom}}</td>
                <td>{{$payement->Modele->nom_mod}}</td>
                <td>{{$payement->prix_total}}</td>
                <td>{{$payement->avance}}</td>
                <td>{{$payement->reste}}</td>
                <td> <a class="button" href="{{route('gestion_payement.show', [$payement->id]) }}"><img src="{{ asset('Img/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_payement.edit', [$payement->id]) }}"><img src="{{ asset('Img/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_payement/'.$payement->id) }}"><img src="{{ asset('Img/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection