@extends('layouts.app')

@section('content')
<a class="btn btn-success float-left" href="/counties/new">New</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($counties as $county)
    <tr>
      <td><?= $county->id ?></td>
      <td><?= $county->name ?></td>
      <td><a href="/counties/delete/{{ $county->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection