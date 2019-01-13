@extends('layouts.app')

@section('content')
@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/properties" class="col-md-5 mx-auto">
@csrf


<div class="input-group mb-3">
  <input type="text" class="form-control" name="area" placeholder="Property area" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2">M^2</span>
  </div>
</div>
<div class="form-group">
    <input class="form-control" name="cadastral_number" type="text" placeholder="Property cadastral_number">
</div>
<div class="form-group">
    <select class="form-control" name="cadastral_municipality_id">
        @foreach($cadastral_municipalities as $cadastral_municipality)
        <option value="{{ $cadastral_municipality->id }}">{{ $cadastral_municipality->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="property_type_id">
        @foreach($property_types as $property_type)
        <option value="{{ $property_type->id }}">{{ $property_type->name }}</option>
        @endforeach
    </select>
</div>


<button type="submit" class="btn btn-warning">Submit</button>
</form>

@endsection