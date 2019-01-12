@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/properties/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">area</th>
      <th scope="col">cadastral_number</th>
	<th scope="col">property_type_name</th>
	<th scope="col">cadastral_municipality_name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($properties as $property)
    <tr>
      <td><?= $property->id ?></td>
      <td><?= $property->area ?></td>
      <td><?= $property->cadastral_number ?></td>
      <td><?= $property->property_type->name ?></td>
      <td><?= $property->cadastral_municipality->name ?></td>
	
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
