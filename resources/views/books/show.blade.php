<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>
    {{$book->name}}
</h1>
<p>

    {{$book->pages}}
</p>

<p>

    {{$book->ISBN}}
</p>

<p>

    {{$book->price}}
</p>
<p>

    {{$book->published_at}}
</p>
</body>
</html>


