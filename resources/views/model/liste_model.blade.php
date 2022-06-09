@extends('layouts.main')
@section('content')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des models</h2>
    <a href="{{ route('gestion_model.create') }}">
        <button type="submit" class="btn btn-outline-primary me-md-2 btn-lg " name="valider">Nouveau</button>
        </a>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Nom</th>
                <th scope="col">Photo</th>
                <th colspan="3">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($model as $model)
            <tr>
                <th scope="row">{{$model->id}}</th>
                <td>{{$model->nom}}</td>
                <td>{{$model->photo}}</td>
                <td> <a class="button" href="{{route('gestion_model.show', [$model->id]) }}"><img src="{{ asset('Img/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_model.edit', [$model->id]) }}"><img src="{{ asset('Img/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_model/'.$model->id) }}"><img src="{{ asset('Img/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection
