@extends('pages.base')

@section('content')

  
  <!-- Modal -->
  <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteUserModalLabel">Delete User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('users/delete/' . $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are you sure you want to delete this user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete User</button>
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

    .button{
        color: #ff6b6b;
        background-color: #ff6b6b;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .text-danger {
        color: #dc3545;
    }
    .btn-danger {
        background-color: #ff6b6b;
        color: #fff;
        border-color: #ff6b6b;
        transition: background-color 0.3s, border-color 0.3s, color 0.3s;
    }

    .btn-danger:hover {
        background-color: #fff;
        color: #ff6b6b;
        border-color: #ff6b6b;
    }

    .btn-primary-edit {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
        transition: background-color 0.3s, border-color 0.3s, color 0.3s;
    }

    .btn-primary-edit:hover {
        background-color: #0056b3;
        color: #fff;
        border-color: #0056b3;
    }
</style>

    <h1> Edit User </h1>
    <div class="row">
        <div class="col-md-5">
             <form action="{{url('users/' .$user->id)}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    @error('name')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror
                </div>
                
                <div class="form-group mt-2">
                    <label for="email">Email: </label>
                    <input type="text" name="email" class="form-control" value="{{$user->email}}">
                    @error('email')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror
                    
                    <div class="form-group mt-2">
                    <label for="phone">Phone: </label>
                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                    @error('phone')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror

                    <div class="form-group mt-2">
                    <label for="address">address: </label>
                    <input type="text" name="Address" class="form-control" value="{{$user->address}}">
                    @error('address')
                        <p class="text-danger"> {{$message}} </p>
                        
                    @enderror

                </div>
                

                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                        Delete User
                    </button>
                    <button class="btn btn-primary-edit me-md-2 mt-2" type="submit">Edit User</button>
                            </form>
                        </div>
                    </div>


@endsection