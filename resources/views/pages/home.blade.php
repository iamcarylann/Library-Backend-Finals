@extends('pages.base')

@section('content')

<style>
    .welcome {
        position: relative;
        text-align: center;
        padding: 20px;
        color: #fff;
        height: 500px; /* Adjust the height to your preference */
        margin-top: -50px
    }

    .welcome h1 {
        margin-top: 200px;
    }

    .img-container {
        position: relative;
        display: inline-block;
        
    }

    .img-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        color: #fff;
        font-size: 40px;
        font-family: cursive;
        text-shadow: 10px 10px 30px rgb(0, 0, 0);
    }

    .img-container:hover .img-text {
        opacity: 1;
    }

    img {
        border-radius: 10px;
        box-shadow: 40px 30px 30px pink;
        transition: 0.2s ease-in-out;
        max-width: 90%; /* Adjust the max-width to make it slightly bigger */
        max-height: 90%; /* Adjust the max-height to make it slightly bigger */
    }

    img:hover {
        transform: scale(1.02);
    }
</style>

<div class="welcome">
    <div class="img-container">
        <img src="https://img.itch.zone/aW1nLzEyODgxNzY4LmdpZg==/original/ksJOcl.gif" alt="Welcome">
        <div class="img-text">Thank You For Watching♡♡♡</div>
    </div>
</div>

@endsection
