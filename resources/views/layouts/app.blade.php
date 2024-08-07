<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        .center-box {
            width: 400px;
            height: 500px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            margin-top: 100px;
            justify-content: center;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(58,150,236);
background: linear-gradient(0deg, rgba(58,150,236,1) 0%, rgba(228,228,211,1) 0%, rgba(30,221,166,1) 91%);
        }
        .weather-search{
            margin: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>