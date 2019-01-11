@extends('layouts.app')

@section('content')

<form method="post" action="/municipalities">
@csrf

<div class="form-group">
    <input class="form-control" name="id" type="text" placeholder="Municipality id">
</div>
<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Municipality name">
</div>
<div class="form-group">
    <input class="form-control" name="county" type="text" placeholder="Municipality county">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection