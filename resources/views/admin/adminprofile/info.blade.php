@section('css')
.online {
    height: 10px;
    width: 10px;
    border-radius: 50%;
    display: inline-block;
    background-color:green;
}
.offline {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
}
@endsection
@extends('admin.master')
@section('content')
<div>
    <div>
        <div>
        
            <!-- User profile -->
            <div>
              <div>
              <h4>Admin profile 
              <a href="{{route('admin.info.get.edit',$admin['id'])}}">Edit</a>
            </h4>
              </div>
              <div>
                <div>
                  <img 
                    @if($admin['avatar'])
                      src="{{asset($admin['avatar'])}}"
                    @endif
                    @if(!$admin['avatar'])
                    src="{{asset('admin_layout/images/default.png')}}"
                    @endif
                   alt="...">
                </div>
                <div>
                  <h4>{{$admin['username']}}
                      {{--  <small> <i>Lv {{$admin['level']}} </i>-<strong> 
                      @if($admin['level'] == 3)
                      {{'Super Admin'}}
                      @endif
                      @if($admin['level'] == 2)
                      {{'Admin'}}
                      @endif
                      @if($admin['level'] == 1)
                      {{'Normal Admin'}}
                      @endif
					  </strong></small>  --}}
					@if($check)
					  @if($check[0]->checkOnline($admin['id']))
					  	<span class="online">online</span>
					  @endif
					  @if(!$check[0]->checkOnline($admin['id']))
					  	<span class="offline">offline</span>
					  @endif
				    @endif
					</h4>
                  {{--  <p>
                    @if($admin['status'])
                    {{$admin['status']}}
                    @endif
                    @if(!$admin['status'])
                    {{'???'}}
                    @endif
                  </p>  --}}
                  
                </div>
              </div>
            </div>
            <br><hr><br>
            <!-- User info -->
            <div>
              <div>
              <h4>Admin info</h4>
              </div>
              <div>
                <table>
                  <tbody>
                    <tr>
                        <th><strong>Fullname</strong></th>
                        <td>
                            @if($admin['fullname'])
                            {{$admin['fullname']}}
                            @endif
                            @if(!$admin['fullname'])
                            {{'???'}}
                            @endif
                        </td>
                    </tr>
                    <tr>
                      <th><strong>Age</strong></th>
                      <td>
                            @if($admin['age'])
                            {{$admin['age']}}
                            @endif
                            @if(!$admin['age'])
                            {{'???'}}
                            @endif
                      </td>
                    </tr>
                    <tr>
                      <th><strong>Position</strong></th>
                      <td>
                            @if($admin['position'])
                            {{$admin['position']}}
                            @endif
                            @if(!$admin['position'])
                            {{'???'}}
                            @endif
                      </td>
                    </tr>
                    <tr>
                        <th><strong>Email</strong></th>
                        <td>
                            @if($admin['email'])
                                {{$admin['email']}}
                            @endif
                            @if(!$admin['email'])
                                {{'???'}}
                            @endif
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <br><hr><br>
            <!-- Community -->
            <div>
              <div>
              <h4>Social Network</h4>
              </div>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <th><strong>Facebook</strong></th>
                      <td>
                        @if($admin['facebook'])
                            <a href="{{$admin['facebook']}}" target="blank">{{$admin['facebook']}}</a>
                        @endif
                        @if(!$admin['facebook'])
                            <a href="#">???</a>
                        @endif
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
                <br><hr><br>
                <!-- Thong ke -->
            <div>
                <div>
                <h4>Số bài đã đăng</h4>
                </div>
                <div>
                  <table>
                    <tbody>
                      <tr>
                        <th><strong>Post</strong></th>
                        <td>{{$count}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
                  <br><hr><br>
    
          </div>
          
    </div>
</div>
@endsection