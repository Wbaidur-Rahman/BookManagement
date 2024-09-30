@extends('layout')

@section('page-content')

<a href="{{route('books.index')}}">Back</a>


    <legend>New Book</legend>
    <form method="post" action="{{route('books.store')}}">
        @csrf

        <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{old('title')}}">
        <p>{{$errors->first('title')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Author</label>
        <input type="text" class="form-control" name="author" value="{{old('author')}}">
        <p>{{$errors->first('author')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="{{old('isbn')}}">
        <p>{{$errors->first('isbn')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="text" class="form-control" name="stock" value="{{old('stock')}}">
        <p>{{$errors->first('stock')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name="price" value="{{old('price')}}">
        <p>{{$errors->first('price')}}</p>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>

@endsection