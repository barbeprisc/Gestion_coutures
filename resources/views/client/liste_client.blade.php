@extends('layouts.main')
@section('content')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des clients</h2>
    <a href="{{ route('gestion_client.create') }}">
        <button type="submit" class="btn btn-outline-primary me-md-2 btn-lg " name="valider">Nouveau</button>
        </a>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Sexe</th>
                <th scope="col">Telephone</th>
                <th scope="col">Adresse</th>
                <th scope="col">Email</th>
                <th colspan="3">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->nom}}</td>
                <td>{{$client->prenom}}</td>
                <td>{{$client->sexe}}</td>
                <td>{{$client->telephone}}</td>
                <td>{{$client->adresse}}</td>
                <td>{{$client->email}}</td>
                <td> <a class="button" href="{{route('gestion_client.show', [$client->id]) }}"><img src="{{ asset('Img/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_client.edit', [$client->id]) }}"><img src="{{ asset('Img/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_client/'.$client->id) }}"><img src="{{ asset('Img/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection
