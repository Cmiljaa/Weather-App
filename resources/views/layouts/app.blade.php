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
        body{
            background-image: url('{{ asset('icons/' . (isset($photo) ? ($photo . ".jpg") : 'default.jpg')) }}');
            background-size: cover;
        }
        .center-box {
            width: 400px;
            height: 530px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border: 0px;
            border-radius: 15px;
            margin-top: 85px;
            justify-content: center;
            color: #000;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(74,221,30);
            background: linear-gradient(0deg, rgba(74,221,30,1) 0%, rgba(255,160,0,1) 100%);
        }
        .weather-search{
            margin: 10px;
            margin-top: 20px;
        }
        .flex-container {
            display: flex;
            justify-content: space-around; /* Centers the items horizontally */
            gap: 20px; /* Space between the items */
        }

        .flex-item {
            display: flex;
            flex-direction: column;
            align-items: center; /* Centers the icon and text */
            text-align: center;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>