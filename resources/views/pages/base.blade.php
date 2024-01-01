<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
             body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container h2 {
            color: #333;
            text-align: center;
        }

        .container nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        .container nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        .container nav ul li a {
            text-decoration: none;
            color: #ff6b6b; /* New text color */
            padding: 10px 15px;
            border-radius: 25px;
            transition: 0.2s ease-in-out
        }

        .container nav ul li a:hover {
            background-color: #ff6b6b; 
            color: #fff;
            border-color: #fff; 
            transform:scale(1.1);
        }

    </style>
</head>
<body>
    <div class='container'>
        <h2 style="color: #ff6b6b">Library</h2>
        <nav>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('users') ? 'active' : ''}}" href="{{url('/users')}}">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{Route::is('books') ? 'active' : ''}}" href="{{url('/books')}}">Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{Route::is('bookcheckouts') ? 'active' : ''}}" href="{{url('/bookcheckouts')}}">Book Checkout</a>
            </li>
          
        </ul>
    </nav>
    </div>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>