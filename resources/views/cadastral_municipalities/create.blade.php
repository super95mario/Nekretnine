@extends('layouts.app')

@section('content')

<form method="post" action="/cadastral_municipalities">
@csrf


<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Cadastral_municipalities name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection