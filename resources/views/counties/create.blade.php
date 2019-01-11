@extends('layouts.app')

@section('content')

<form method="post" action="/counties">
@csrf

<div class="form-group">
    <input class="form-control" name="id" type="text" placeholder="County id">
</div>
<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="County name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection