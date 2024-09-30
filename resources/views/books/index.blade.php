@extends('layout')

@section('page-content')

<p class="text-end">
    <a href="{{route('books.create')}}" class="btn btn-primary">New Book</a>
</p>

<table class="table table-striped table-bordered">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Author</td>
        <td>Details</td>
    </tr>
    @foreach ($books as $id => $book) 
    <tr>
        <td>{{$book->id +1 }}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>
            <a href="{{ route('books.show', $book->id)}}"> Details</a>
        </td>
    </tr>
    @endforeach
</table>

{{$books->links()}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection
