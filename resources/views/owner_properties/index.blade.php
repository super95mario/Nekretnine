@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/owner_properties/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">percentage</th>
      <th scope="col">owner_name</th>
      <th scope="col">property_area</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($owner_properties as $owner_property)
    <tr>
      <td><?= $owner_property->id ?></td>
      <td><?= $owner_property->percentage ?></td>
      <td><?= $owner_property->owner->name ?></td>
      <td><?= $owner_property->property->area ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection