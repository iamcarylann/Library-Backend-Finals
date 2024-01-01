@extends('pages.base')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="deleteBookCheckoutModal" tabindex="-1" aria-labelledby="deleteBookCheckoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteBookCheckoutModalLabel">Delete Bookcheckout</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('bookcheckouts/delete/' . $checkout->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Are you sure you want to delete this bookcheckout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete Bookcheckout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 0.375rem 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .text-danger {
            color: #dc3545;
        }
    </style>

    <h1>Edit Bookcheckout</h1>
    <div class="row">
        <div class="col-md-5">
        <form action="{{url('bookcheckouts/' .$checkout->id)}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="user_id">User: </label>
                    <select name="user_id" class="form-control" required>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $checkout->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>
                
                <div class="form-group mt-2">
                    <label for="book_id">Book: </label>
                    <select name="book_id" class="form-control" required>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}" {{ $book->id == $checkout->book_id ? 'selected' : '' }}>{{ $book->title }}</option>
                        @endforeach
                    </select>
                    @error('book_id')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>
                
                <div class="form-group mt-2">
                    <label for="checkout_date">Checkout Date: </label>
                    <input type="date" name="checkout_date" class="form-control" value="{{ $checkout->checkout_date }}" required>
                    @error('checkout_date')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="due_date">Due Date: </label>
                    <input type="date" name="due_date" class="form-control" value="{{ $checkout->due_date }}" required>
                    @error('due_date')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="returned_at">Returned At: </label>
                    <input type="date" name="returned_at" class="form-control" value="{{ $checkout->returned_at }}">
                    @error('returned_at')
                        <p class="text-danger"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteBookCheckoutModal">
                        Delete Bookcheckout
                    </button>
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit Bookcheckout</button>
                </div>
             </form>
        </div>
    </div>
@endsection
