@extends('layouts.app')
@section('content')
@include('partials.nav')
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Numero</th>
            <th scope="col">Icone</th>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Pourcentage</th>
            <th scope="col">Langage</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($features as $feature)
        <tr>
            <th scope="row">{{ $feature->id }}</th>
            <td>{{ $feature->numero }}</td>
            <td class="features-item {{ $feature->icone }}">
                <div class="icon"></div>
            </td>
            <td>{{ $feature->titre }}</td>
            <td>{{ $feature->description }}</td>
            <td>{{ $feature->pourcentage }}</td>
            <td>{{ $feature->langage }}</td>
            <td>
                <div>
                    <a class="btn btn-warning " href="{{route('contact.edit', $feature->id)}}">Edit</a>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection