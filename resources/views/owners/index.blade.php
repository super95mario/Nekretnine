
@extends('layouts.app')

@section('content')
<a class="btn btn-success float-left" href="/owners/new">New</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">#</th>
    <th scope="col">oib</th>
      <th scope="col">name</th>
      <th scope="col">surname</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">address</th>
      <th scope="col">town_name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($owners as $owner)
    <tr>
    <td><?= $owner->id ?></td>
      <td><?= $owner->oib ?></td>
      <td><?= $owner->name ?></td>
      <td><?= $owner->surname ?></td>
      <td><?= $owner->username ?></td>
      <td><?= $owner->password ?></td>
      <td><?= $owner->address ?></td>
      <td><?= $owner->town->name ?></td>
      <td><a href="/owners/delete/{{ $owner->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection