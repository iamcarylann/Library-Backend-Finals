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

    <h1> Edit Book </h1>
    <div class="row">
        <div class="col-md-5">
             <form action="{{url('books/' .$book->id)}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="title">Title: </label>
                    <input type="text" name="title" class="form-control" value="{{$book->title}}">
                    @error('title')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror
                </div>
                
                <div class="form-group mt-2">
                    <label for="author">Author: </label>
                    <input type="text" name="author" class="form-control" value="{{$book->author}}">
                    @error('author')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror
                    
                    <div class="form-group mt-2">
                    <label for="isbn">ISBN: </label>
                    <input type="text" name="isbn" class="form-control" value="{{$book->isbn}}">
                    @error('isbn')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror

                    <div class="form-group mt-2">
                    <label for="published_at">Published At: </label>
                    <input type="text" name="published_at" class="form-control" value="{{$book->published_at}}">
                    @error('published_at')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror

                    <div class="form-group mt-2">
                    <label for="quantity">Quantity: </label>
                    <input type="text" name="quantity" class="form-control" value="{{$book->quantity}}">
                    @error('quantity')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror


                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit Book </button>
                </div>
             </form> 
        </div>
    </div>


@endsection