@extends('master')
@section('title','New book')
@section('content')
    @include('errors')
    <form action="{{ route('edit_book') }}" method="post">
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
                    <input type="text" class="form-control" id="name" name='name' placeholder="Book name" value="{{$book->name}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="author" name='author' placeholder="Author" value="{{$book->author}}">
                </div>
            </div>
            <div class="col-4">    
                <div class="form-group">
                    <input type="text" class="form-control" id="publisher" name='publisher' placeholder="Publisher" value="{{$book->publisher}}">
                </div>
            </div>
            <div class="col-4">    
                <div class="form-group">
                    <input type="text" class="form-control" id="ISBN" name='ISBN' placeholder="ISBN" value="{{$book->ISBN}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="barcode" name='barcode' placeholder="Barcode" value="{{$book->barcode}}">
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <input type="text" class="form-control" id="keywords" name='keywords' placeholder="Keywords" value="{{$book->keywords}}">
                </div>
            </div>    
        </div>
            <div class="form-group">
            <textarea type="text" class="form-control" name='description' placeholder='Description ...'>{{$book->description}}</textarea>
            </div>   
            <input type="hidden" name="id" value="{{$book->id}}">
            {{ csrf_field() }} 
        <button type="submit" class="btn btn-primary center">Edit</button>
    </form>
@endsection