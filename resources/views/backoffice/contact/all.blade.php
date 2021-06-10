@extends('layouts.app')
@section('content')
@include('partials.nav')
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Contact</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <th scope="row">{{ $contact->id }}</th>
            <td><img style="width: 25px" src="{{asset('img/'.  $contact->image )}}" alt=""></td>
            <td>{{ $contact->contact }}</td>
            <td>
                <div class="d-flex">
                    <a class="btn btn-warning mx-1 " href="{{route('contact.edit', $contact->id)}}">Edit</a>
                    <form action="{{route('contact.destroy', $contact->id)}}" method="POST">
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