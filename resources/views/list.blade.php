@extends('layout')

@section('content')
@if (Session::has('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <p>{{ Session::get('success') }}</p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div>

    <h1 align='center'><u>List of Restos</u></h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->address }}</td>
            <td>
                <a href="edit/{{ $item->id }}" class="btn btn-success">Edit</a>
                <a href="{{ url('delete/'.$item->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
</div>
@endsection