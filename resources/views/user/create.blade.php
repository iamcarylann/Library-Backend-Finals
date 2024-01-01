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

    <h1> Create New User </h1>
    <div class="row">
        <div class="col-md-5">
             <form action="{{url('users/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror
                </div> 
                <div class="form-group mt-2">
                    <label for="email">Email: </label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="phone">Phone: </label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="address">Address: </label>
                    <input type="text" name="address" class="form-control">
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