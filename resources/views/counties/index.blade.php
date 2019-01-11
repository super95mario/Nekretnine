@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($counties as $county)
    <tr>
      <td><?= $county->id ?></td>
      <td><?= $county->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection