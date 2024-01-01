@extends('pages.base')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>

        <ul class="list-group">
            <li class="list-group-item"><strong>Author:</strong> {{ $book->author }}</li>
            <li class="list-group-item"><strong>ISBN:</strong> {{ $book->isbn }}</li>
            <li class="list-group-item"><strong>Published At:</strong> {{ $book->published_at }}</li>
            <li class="list-group-item"><strong>Quantity:</strong> {{ $book->quantity }}</li>
        
        </ul>

        <a href="{{ route('book.index') }}" class="btn btn-primary mt-3">Back to Books</a>
    </div>
@endsection
