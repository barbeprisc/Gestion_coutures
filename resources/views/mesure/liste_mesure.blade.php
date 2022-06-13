@extends('layouts.main')
@section('content')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des mesures</h2>
    <a href="{{ route('gestion_mesure.create') }}">
        <button type="submit" class="btn btn-outline-primary me-md-2 btn-lg " name="valider">Nouveau</button>
    </a>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Telephone</th>
                <th scope="col">Adresse</th>
                <th scope="col">Email</th>
                <th scope="col">dos</th>
                <th scope="col">epaule</th>
                <th scope="col">bas</th>
                <th colspan="3">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($mesures as $mesure)
            <tr>
                <th scope="row">{{$mesure->id}}</th>
                <td>{{$mesure->Client->nom}}</td>
                <td>{{$mesure->Client->prenom}}</td>
                <td>{{$mesure->Client->telephone}}</td>
                <td>{{$mesure->Client->adresse}}</td>
                <td>{{$mesure->Client->email}}</td>
                <td>{{$mesure->dos}}</td>
                <td>{{$mesure->epaule}}</td>
                <td>{{$mesure->bas}}</td>
                <td> <a class="button" href="{{route('gestion_mesure.show', [$mesure->id]) }}"><img src="{{ asset('Img/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_mesure.edit', [$mesure->id]) }}"><img src="{{ asset('Img/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_mesure/'.$mesure->id) }}"><img src="{{ asset('Img/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection
