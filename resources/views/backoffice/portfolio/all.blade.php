@extends('layouts.app')
@section('content')
@include('partials.nav')
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Image</th>
            <th scope="col">Profession</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($portfolios as $portfolio)
        <tr>
            <th scope="row">{{ $portfolio->id }}</th>
            <td>{{ $portfolio->titre }}</td>
            <td><img style="width: 100px" src="{{asset('img/'.  $portfolio->image )}}" alt=""></td>
            <td>{{ $portfolio->profession }}</td>
            <td>
                <div>
                    <a class="btn btn-warning " href="{{route('contact.edit', $portfolio->id)}}">Edit</a>
                </div>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>
@endsection