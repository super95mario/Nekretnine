@extends('layouts.app')

@section('content')
<a class="btn btn-success float-left" href="/municipalities/new">New</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">county_name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($municipalities as $municipality)
    <tr>
      <td><?= $municipality->id ?></td>
      <td><?= $municipality->name ?></td>
      <td><?= $municipality->county->name ?></td>
      <td><a href="/municipalities/delete/{{ $municipality->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
