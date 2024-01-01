@extends('pages.base')

@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }

    h1 {
        font-size: 2.5em;
        color: #333;
        font-family: Monospace;
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
        border-color: #007bff;
        border-radius: 10px; 
    }
    

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .text-danger {
        color: #dc3545;
    }
</style>
    <h1>Create Book Checkout</h1>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('bookcheckouts.store') }}" method="POST">
        @csrf

        <div class="row">
        <div class="col-md-5">
             <form action="{{url('bookcheckouts/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="user_id">User ID: </label>
                        <select name="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
                </select>
                    @error('user_id')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror
                </div> 
                <div class="form-group mt-2">
                    <label for="book_id">Book ID: </label>
                    <select name="book_id" required>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
        </select>
                @error('user_id')
                        <p class="text-danger"> {{$message}} </p>
                                    
                @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="checkout_date">Checkout Date: </label>
                    <input type="date" name="checkout_date" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="due_date">Due Date: </label>
                    <input type="date" name="due_date" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="returned_at">Returned At: </label>
                    <input type="date" name="returned_at" class="form-control">
                </div>
               
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary">
                        Add User
                    </button>
                </div>
             </form>
        </div>
    </div>

@endsection

