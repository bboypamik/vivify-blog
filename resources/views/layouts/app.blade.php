<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

<nav class="bg-secondary navbar navbar-dark d-flex justify-content-between">
    <div class=" d-flex justify-content-between">
        <div class="p-2">
            <a class ="btn btn-light" href="">Home</a>
        </div>
        <div class="p-2">
            <a class="btn btn-light" href="">Dashboard</a>
        </div>
        <div class="p-2">
            <a class="btn btn-light" href="{{route('posts')}}">Posts</a>
        </div>
    </div>



</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
