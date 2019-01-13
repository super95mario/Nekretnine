@extends('layouts.app')

@section('content')
@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/owner_properties" class="col-md-5 mx-auto">
@csrf


<div class="form-group">
    <input class="form-control" name="percentage" type="text" placeholder="Owner_property percentage">
</div>
<div class="form-group">
    <select class="form-control" name="owner_id">
        @foreach($owners as $owner)
        <option value="{{ $owner->id }}">{{ $owner->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="property_id">
        @foreach($properties as $property)
        <option value="{{ $property->id }}">{{ $property->area }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection