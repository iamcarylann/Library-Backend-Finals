
@extends('pages.base')

@section('content')
    <div class="container">
        <h1>Create a New Book</h1>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('book.store') }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>

            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>

            <div class="mb-3">
                <label for="published_at" class="form-label">Published At</label>
                <input type="date" class="form-control" id="published_at" name="published_at" required>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required min="0">
            </div>

            <button type="submit" class="btn btn-create-book">Create Book</button>
        </form>
    </div>
    <style>
    .btn-create-book {
        background-color: #ff6b6b;
        color: #fff;
        border-color: #ff6b6b;
        transition: background-color 0.3s, border-color 0.3s, color 0.3s;
    }

    .btn-create-book:hover {
        background-color: #e64d4d;
        color: #fff;
        border-color: #e64d4d;
    }
</style>
    
@endsection

