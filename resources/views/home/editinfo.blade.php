@extends('home.master')
@section('title','Edit info')
@section('content')
<div>
   
        
    
        <h2 style="margin-top:20px">Edit</h2>
        <form action="{{route('home.post.edit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(session('phanquyen'))
                    echo('{{session('phanquyen')}}');
            @endif
            {{--  @foreach ($user as $key => $val)  --}}
          <div>
            <label for="email">Fullname</label>
            <input type="text" 
            @if($val->fullname)
                value="{{$val->fullname}}"
            @endif
             id="email" placeholder="Enter username" name="fullname">
          </div>
          <div>
            <label for="email">Age</label>
            <input type="text"
            @if($val->birth)
                value="{{$val->birth}}"
            @endif
            id="email" placeholder="Enter age" name="age">
        </div>
        <div>
            
            <div>Avatar
                <input type="file" style="display:none;" id="basicinput" name="avatar" >
                <br>
                <img style="padding: 10px 10px;
                background-color: white;
                box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" 
                @if($val->avatar)
                src="{{asset($val['avatar'])}}"
                @endif
                @if(!$val->avatar)
                src="{{asset('admin_layout/images/default.png')}}"
                @endif
                width="50px" height="50px">
            </div>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" 
            @if($val->email)
                value="{{$val->email}}"
            @endif
            id="email" placeholder="Enter email" name="email">
        </div>
        <div>
            <label for="email">Facebook</label>
            <input type="text"
            @if($val->facebook)
                value="{{$val->facebook}}"
            @endif
            id="email" placeholder="Enter facebook" name="facebook">
        </div>
        
        
          @if (count($errors) > 0)
          <div>
              <a href="#"  data-dismiss="alert" aria-label="close">&times;</a>
              @foreach ($errors->all() as $error)
                  {{ $error }}<br>
              @endforeach
          </div>
          @endif
          <button type="submit" >Submit</button>
          {{--  @endforeach  --}}
        </form>
        <br>
        
</div>
@endsection
@section('js')
<script>
    $('.img-bnupload').click(function(){
        $('.img-upload').click();
        {{--  var a = $('input[type="file"]').val();
        $(".img-bnupload").attr("src",a);  --}}
    });
    $('.img-upload').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".img-bnupload").fadeIn("fast").attr('src',tmppath);       
        });
</script>
@endsection