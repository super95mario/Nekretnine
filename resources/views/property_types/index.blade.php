@extends('layouts.app')

@section('content')
<a class="btn btn-success float-left" href="/property_types/new">New</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($property_types as $property_type)
    <tr>
      <td><?= $property_type->id ?></td>
      <td><?= $property_type->name ?></td>
      <td><a href="/property_types/delete/{{ $property_type->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection