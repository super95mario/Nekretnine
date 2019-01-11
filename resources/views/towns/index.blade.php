@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/cities/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">municipality_id</th>
      <th scope="col">cadastral_municipality_id</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($towns as $town)
    <tr>
      <td><?= $town->id ?></td>
      <td><?= $town->name ?></td>
      <td><?= $town->municipality_id ?></td>
      <td><?= $town->cadastral_municipality_id ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
