@extends('layouts.app')

@section('content')

<form method="post" action="/property_types">
@csrf

<div class="form-group">
    <input class="form-control" name="id" type="text" placeholder="Property_type id">
</div>
<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Property_type name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection