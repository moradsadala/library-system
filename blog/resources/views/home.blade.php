@extends('master')
@section('title','Home')
@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session:: get('info')}}</p>
            </div>
        </div>
    @endif
<table class="table table-sm table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Book Name</th>
        <th scope="col">Category</th>
        <th scope="col">Function</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $key => $book)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$book->name}}</td>
            <td>{{$book->category->title}}</td>
            <td>
                <div class="row">
                    <a href="{{ route('edit_book_form',['id'=> $book->id]) }}" class="btn btn-primary m-2">Edit</a>
                    <a href="{{ route('delete_book',['id'=> $book->id]) }}" class="btn btn-danger m-2">Delete</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection