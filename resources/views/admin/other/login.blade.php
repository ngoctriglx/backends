<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('admin.post.login')}}" method="POST">
        @csrf
        <p><label for="">username</label></p>
        <p><input type="text" name="username"></p>
        <p><label for="">password</label></p>
        <p><input type="text" name="password"></p>
        @if(session('error'))
            {{session('error')}}
        @endif
        <p><button type="submit">Login</button></p>
    </form>
</body>
</html>