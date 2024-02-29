<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>product</h1>

    <h3>list product </h3>
    <ul>
        <li><a href="{{url('/category/food-beverage')}}">food-beverage</a></li>
        <li><a href="{{url('/category/beauty-health')}}">beauty-health</a></li>
        <li><a href="{{route('home-care')}}">home-care</a></li>
        <li><a href="{{route('baby-kid')}}">baby-kid</a></li>
    
    <h3><a href="{{url('/')}}">back</a></h3>
</body>
</html>