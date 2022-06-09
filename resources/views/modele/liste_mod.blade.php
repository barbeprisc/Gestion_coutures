@extends('layouts.main')
@section('content')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des modeles</h2>
    <a href="{{ route('gestion_modele.create') }}">
        <button type="submit" class="btn btn-outline-primary me-md-2 btn-lg " name="valider">Nouveau</button>
        </a>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Nom_mod</th>
                <th scope="col">Photo</th>
                <th colspan="3">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($modeles as $modele)
            <tr>
                <th scope="row">{{$modele->id}}</th>
                <td>{{$modele->nom_mod}}</td>
                <td>{{$modele->photo}}</td>
                <td> <a class="button" href="{{route('gestion_modele.show', [$modele->id]) }}"><img src="{{ asset('Img/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_modele.edit', [$modele->id]) }}"><img src="{{ asset('Img/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_modele/'.$modele->id) }}"><img src="{{ asset('Img/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection
