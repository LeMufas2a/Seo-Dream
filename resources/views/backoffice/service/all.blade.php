@extends('layouts.app')
@section('content')
@include('partials.nav')
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Image</th>
            <th scope="col">Service</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($services as $service)
        <tr>
            <th scope="row">{{ $service->id }}</th>
            <td>{{ $service->titre }}</td>
            <td><img style="width: 25px" src="{{asset('img/'.  $service->image )}}" alt=""></td>
            <td>{{ $service->service }}</td>
            <td>{{ $service->description }}</td>
            <td>
                <div>
                    <a class="btn btn-warning " href="{{route('contact.edit', $contact->id)}}">Edit</a>
                </div>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>
@endsection