<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('home.post.sigin')}}" method="POST">
        @csrf
        <h3>Đăng ký</h3>
        <br>
        <p>Tên của bạn</p>
        <input type="text" name="fullname" placeholder="Tên của bạn"  value="{{ old('fullname') }}">
        @if($errors->has('fullname'))
            <p>{{$errors->first('fullname')}}</p>
        @endif
        <p>Tên tài khoản</p>
        <input type="text" name="username" placeholder="Tên tài khoản" value="{{ old('username') }}">

        @if($errors->has('username'))
            <p>{{$errors->first('username')}}</p>
        @endif

        <p>Mật khẩu</p>
        <input type="text" name="password" placeholder="Mật khẩu" value="{{ old('password') }}">
        @if($errors->has('password'))
            <p>{{$errors->first('password')}}</p>
        @endif

        <p>Nhập lại mật khẩu</p>
        <input type="text" name="repassword" placeholder="Nhập lại mật khẩu" value="{{ old('repassword') }}">
        @if($errors->has('repassword'))
            <p>{{$errors->first('repassword')}}</p>
        @endif
        <br>
        <br>
        <button type="submit">Submit</button>

        <a href="login" class="btn-face m-b-20">
            <i class="fa fa-facebook-official"></i>
            Login
        </a>
    </form>
</body>
</html>