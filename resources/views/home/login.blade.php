<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('home.post.login')}}" method="POST">
        @csrf
        <p>email</p>
        <input type="text" name="email" 
        @if(session('email'))
        value="{{session('email')}}"
        @endif>
        <p>password</p>
        <input type="text"  name="password">
        <br>
        <br>
        <button type="submit">submit</button>
        <br>
        @if(session('error'))
        <strong>Danger!</strong> {{session('error')}}
        @endif
        
        <a href="sigin" class="btn-face m-b-20">
            <i class="fa fa-facebook-official"></i>
            Sigin
        </a>
    </form>
</body>
</html>