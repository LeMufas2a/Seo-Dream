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
            <th scope="col">Actions</th>

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
            <td><img style="width: 100px" src="{{asset('img/'.  $home->image )}}" alt=""></td>
            <td>
                <div class="d-flex">
                    <a class="btn btn-warning mx-1 " href="{{route('contact.edit', $home->id)}}">Edit</a>
                    <form action="{{route('home.destroy', $home->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection