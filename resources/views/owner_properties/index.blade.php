@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">percentage</th>
      <th scope="col">owner_id</th>
      <th scope="col">property_id</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($owner_properties as $owner_property)
    <tr>
      <td><?= $owner_property->id ?></td>
      <td><?= $owner_property->percentage ?></td>
      <td><?= $owner_property->owner_id ?></td>
      <td><?= $owner_property->property_id ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection