@extends('layouts.app')

@section('content')
<a class="btn btn-success float-left" href="/cadastral_municipalities/new">New</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Delete</th>
      
      
      
    </tr>
  </thead>
  <tbody>
  @foreach ($cadastral_municipalities as $cadastral_municipality)
    <tr>
      <td><?= $cadastral_municipality->id ?></td>
      <td><?= $cadastral_municipality->name ?></td>
      <td><a href="/cadastral_municipalities/delete/{{ $cadastral_municipality->id }}" class="btn btn-sm btn-danger">X</a></td>
      
      
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
