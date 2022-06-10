@extends('layouts.main')
@section('content')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des payement</h2>
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
                <td> <a class="button" href="{{route('gestion_mesure.show', [$mesure->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_mesure.edit', [$mesure->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_mesure/'.$mesure->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection