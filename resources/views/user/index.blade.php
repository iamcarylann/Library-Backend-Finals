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
    <a href="{{ url('/users/create') }}" class="btn btn-primary me-md-2" type="button">
        Add New User
    </a>
</div>

    <div class="table-container">
        <table class="table table-bordered table-striped table-sn">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Update</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td class="text-center">
                            <a href="{{url('/users/' .$user->id)}}" class="btn btn-primary">
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
