@extends('home.master')
  @foreach ($new as $val)
  @section('title',$val->title)
  @section('content')
    <!-- Title -->
    <h1>{{$val->title}}</h1>
    <!-- Author -->
    <p>
      <b>{{$val->author}}</b>
    </p>
    <hr>
    <!-- Date/Time -->
    <p>Posted on <i>{{$val->created_at}}</i><istyle="margin-left:20px"></istyle=>{{$val->view}}</p>
    <hr>
    <!-- Preview Image -->
    <img src="{{asset($val->avatar)}}" height="300px" alt="">
    <hr>
    <!-- Post Content -->
    <?php echo $val->content;?>
    <hr>
    @endforeach
    
    <div>
        <h5>Leave a Comment:</h5>
        <div>
            <form action="{{route('home.post.comment',$val->id)}}" method="POST">
                @csrf
                <div>
                    <textarea rows="3" name="content"></textarea>
                </div>
            <button type="submit">Submit</button>
          </form>
        </div>
    </div>
    {{-- show comment --}}
    @foreach($cmt as $key => $val)
      @foreach($user as $val2)
          @if($val->user_id === $val2->id)
            <!-- Single Comment -->
              <div>
                <img 
                  @if(!$val2->avatar)
                    src="{{asset('admin_layout/images/default.png')}}"
                  @endif
                  @if($val2->avatar)
                    src="{{asset($val2->avatar)}}"
                  @endif
                  alt="" width="50px" height="50px">
                  <div>
                  <h5>{{$val2->username}}</h5>
                    {{$val->content}}<br>
                  <small><i>{{$val->updated_at}}</i></small>
              </div>
              <div>
                @if (!empty(Auth::user()))
                    @if (Auth::user()->id == $val->user_id)
                      <a href="">Xóa</a>
                      {{-- {{route('home.post.deletecomment',$val->id)}} --}}
                    @endif   
                @endif
                <a href="{{route('home.post.reportcomment',$val->id)}}">Report</a>
              </div>
            </div>
          @endif
      @endforeach
      <p>********************************************************</p>
    @endforeach
  @endsection
    