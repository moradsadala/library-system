@extends('master')
@section('title','New book')
@section('content')
    @include('errors')
    <form action="{{ route('create_book') }}" method="post">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                <select class="form-control" id="category" name='category'>
                        <option value="" disabled selected>Category</option>
                    @foreach ($categories as $category)
                        <option value='{{$category->id}}'>{{$category->title}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name='name' placeholder="Book name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="author" name='author' placeholder="Author">
                </div>
            </div>
            <div class="col-4">    
                <div class="form-group">
                    <input type="text" class="form-control" id="publisher" name='publisher' placeholder="Publisher">
                </div>
            </div>
            <div class="col-4">    
                <div class="form-group">
                    <input type="text" class="form-control" id="ISBN" name='ISBN' placeholder="ISBN">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="barcode" name='barcode' placeholder="Barcode">
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <input type="text" class="form-control" id="keywords" name='keywords' placeholder="Keywords">
                </div>
            </div>    
        </div>
            <div class="form-group">
            <textarea type="text" class="form-control" name='description' placeholder='Description ...'></textarea>
            </div>   
            {{ csrf_field() }} 
        <button type="submit" class="btn btn-primary center">Add</button>
    </form>
@endsection