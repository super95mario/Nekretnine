@extends('layouts.app')

@section('content')

<form method="post" action="/owner_properties">
@csrf


<div class="form-group">
    <input class="form-control" name="percentage" type="text" placeholder="Owner_property percentage">
</div>
<div class="form-group">
    <input class="form-control" name="owner_id" type="text" placeholder="Owner_property owner_id">
</div>
<div class="form-group">
    <input class="form-control" name="property_id" type="text" placeholder="Owner_property property_id">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection