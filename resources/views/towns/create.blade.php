@extends('layouts.app')

@section('content')

<form method="post" action="/towns">
@csrf


<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Town name">
</div>
<div class="form-group">
    <input class="form-control" name="municipality_id" type="text" placeholder="Town municipality_id">
</div>
<div class="form-group">
    <input class="form-control" name="cadastral_municipality_id" type="text" placeholder="Town cadastral_municipality_id">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection