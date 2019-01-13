@extends('layouts.app')

@section('content')
@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/municipalities" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Municipality name">
</div>
<div class="form-group">
<select class="form-control" name="county_id">
        @foreach($counties as $county)
        <option value="{{ $county->id }}">{{ $county->name }}</option>
        @endforeach
    </select>

</div>

<button type="submit" class="btn btn-warning">Submit</button>
</form>

@endsection