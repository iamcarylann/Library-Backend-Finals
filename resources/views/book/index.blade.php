@extends('pages.base')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <style>
        .table {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn-primary {
        background-color: #ff6b6b;
        color: #fff;
        border-color: #ff6b6b;
        transition: background-color 0.3s, border-color 0.3s, color 0.3s;
    }

    .btn-primary:hover {
        background-color: #fff;
        color: #ff6b6b;
        border-color: #ff6b6b;
    }
</style>

<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{ url('/books/create') }}" class="btn btn-primary me-md-2" type="button">
        Add New Book
    </a>
</div>

    <div class="table-container">
        <table class="table table-bordered table-striped table-sn">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Published At</th>
                <th>Quantity</th>
                <th>Update</th>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->published_at }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td class="text-center">
                            <a href="{{ url('/books/' . $book->id) }}" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="deleteBookModal" tabindex="-1" aria-labelledby="deleteBookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteBookModalLabel">Delete Book</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('books/delete/' . $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are you sure you want to delete this book?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete Book</button>
                </div>
            </form>
        </div>
    </div>
</div>
