@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/cadastral_municipalities/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach ($cadastral_municipalities as $cadastral_municipality)
    <tr>
      <td><?= $cadastral_municipality->id ?></td>
      <td><?= $cadastral_municipality->name ?></td>
      
      
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
