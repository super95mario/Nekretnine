@extends('layouts.app')

@section('content')
<a class="btn btn-success float-left" href="/towns/new">New</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">municipality_name</th>
      <th scope="col">cadastral_municipality_name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($towns as $town)
    <tr>
      <td><?= $town->id ?></td>
      <td><?= $town->name ?></td>
      <td><?= $town->municipality->name ?></td>
      <td><?= $town->cadastral_municipality->name ?></td>
      <td><a href="/towns/delete/{{ $town->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
