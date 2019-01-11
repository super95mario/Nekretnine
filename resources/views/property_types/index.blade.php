@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($property_types as $property_type)
    <tr>
      <td><?= $property_type->id ?></td>
      <td><?= $property_type->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection