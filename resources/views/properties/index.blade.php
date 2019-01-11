@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">area</th>
      <th scope="col">cadastral_number</th>
	<th scope="col">property_type_id</th>
	<th scope="col">cadastral_municipality_id</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($properties as $property)
    <tr>
      <td><?= $property->id ?></td>
      <td><?= $property->area ?></td>
      <td><?= $property->cadastral_number ?></td>
	<td><?= $property->property_type_id ?></td>
	<td><?= $property->cadastral_municipality_id ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
@foreach ($properties as $property)
<a class="btn btn-primary float-right" href="/properties/new">New</a>
    <tr>
        <td><?= $property->area ?></td>
	<td><?= $property->cadastral_number ?></td>
	<td><?= $property->property_type_id ?></td>
	<td><?= $property->cadastral_municipality_id ?></td>
	<td><?= $property->owner->oib ?></td>
	<td><?= $property->owner->name ?></td>
	<td><?= $property->owner->surname ?></td>
	<td><?= $property->owner->username ?></td>
	<td><?= $property->owner->password ?></td>
	<td><?= $property->owner->address ?></td>
	<td><?= $property->owner->town_id ?></td>
	<td><?= $property->cadastral_municipality->name ?></td>
	<td><?= $property->property_type->name ?></td>
    </tr>
@endforeach