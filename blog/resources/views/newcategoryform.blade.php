@extends('master')
@section('title','New Category')
@section('content')
<form action="{{ route('create_category') }}" method="post">
    <div class="form-group">
        <input type="text" class="form-control" id="title" name='title' placeholder="Category Title">
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection