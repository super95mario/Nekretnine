@extends('layouts.app')

@section('content')

<form method="post" action="/owners">
@csrf

<div class="form-group">
    <input class="form-control" name="id" type="text" placeholder="Owner id">
</div>
<div class="form-group">
    <input class="form-control" name="oib" type="text" placeholder="Owner oib">
</div>
<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Owner name">
</div>
<div class="form-group">
    <input class="form-control" name="surname" type="text" placeholder="Owner surname">
</div>
<div class="form-group">
    <input class="form-control" name="username" type="text" placeholder="Owner username">
</div>
<div class="form-group">
    <input class="form-control" name="password" type="text" placeholder="Owner password">
</div>
<div class="form-group">
    <input class="form-control" name="address" type="text" placeholder="Owner address">
</div>
<div class="form-group">
    <input class="form-control" name="town_id" type="text" placeholder="Owner town_id">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection