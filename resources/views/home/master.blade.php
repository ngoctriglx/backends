<!DOCTYPE html>
<html lang="en">
    <?php 
      use App\cate,App\info;
      use Illuminate\Support\Facades\Auth;
      use Illuminate\Support\Facades\DB;
      $cate = cate::all();
      $new = DB::table('news')->orderBy('view', 'desc')->get();
      if(Auth::check())
      $info = info::where('user_id',Auth::user()->id)->get();
      
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <ul>
          <li>
            <a href="">About Me</a>
          </li>
          @if(!Auth::check())
            <li>
              <a href="{{route('home.get.login')}}">Login</a>
            </li>
            <li>
              <a href="{{route('home.get.sigin')}}">Sigin</a>
            </li>
          @endif
          @if(Auth::check())
            <li>
              <div>
                <label for="">{{$info[0]['fullname']}}</label>
                <ul style="min-width:auto;">
                    <li><a href="{{route('home.get.edit')}}">Edit info</a></li>
                    <li><a href="{{route('home.get.changepass')}}">Change pass</a></li>
                  </ul>
              </div>
            </li>
            <li>
              <a href="{{route('home.get.logout')}}">Logout</a>
            </li>
          @endif
        </ul>
      </div>
      @yield('content')
</body>
</html>