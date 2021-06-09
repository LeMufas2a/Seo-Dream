@extends('layouts.app')
@section('content')
    @include('partials.nav')
    <table class="table table-hover mt-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Statut</th>
                <th scope="col">Prix</th>
                <th scope="col">Horaire</th>
                <th scope="col">Titre</th>
                <th scope="col">Bouton</th>
                <th scope="col">Image</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($homes as $home)
                <tr>
                    <th scope="row">{{ $home->id }}</th>
                    <td>{{ $home->statut }}</td>
                    <td>{{ $home->prix }}</td>
                    <td>{{ $home->horaire }}</td>
                    <td>{{ $home->titre }}</td>
                    <td>{{ $home->bouton }}</td>
                    <td><img src="{{asset('img/{{ $home->image }}')}}" alt=""></td>
                   
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
