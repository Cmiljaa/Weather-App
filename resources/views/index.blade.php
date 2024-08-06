<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    DOBRODOSLI <br>
    <form action="{{route('show')}}" method="POST">
        @csrf
        <input type="text" placeholder="Enter city..." name="city">
        <input type="submit" value="POTVRDI">
    </form>
</body>
</html>