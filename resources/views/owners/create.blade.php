@extends('layouts.app')

@section('content')
@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/owners" class="col-md-5 mx-auto">
@csrf


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
<select class="form-control" name="town_id">
        @foreach($towns as $town)
        <option value="{{ $town->id }}">{{ $town->name }}</option>
        @endforeach
    </select>
</div>


<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection