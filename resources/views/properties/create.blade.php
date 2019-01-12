@extends('layouts.app')

@section('content')

<form method="post" action="/properties">
@csrf


<div class="form-group">
    <input class="form-control" name="area" type="text" placeholder="Property area">
</div>
<div class="form-group">
    <input class="form-control" name="cadastral_number" type="text" placeholder="Property cadastral_number">
</div>
<div class="form-group">
    <input class="form-control" name="property_type_id" type="text" placeholder="Property property_type_id">
</div>
<div class="form-group">
    <input class="form-control" name="cadastral_municipality_id" type="text" placeholder="Property cadastral_municipality_id">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection