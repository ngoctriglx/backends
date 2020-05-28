@extends('admin.master')
@section('title','List user')
@section('content')
<div>
    <div>
        <h3>List user</h3>
    </div>
    <div>
        <table cellpadding="0" cellspacing="0" border="1" width="100%">
            <thead>
                <tr>
                    <th width="3%">STT</th>
                    <th>email</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Age</th>
                    <th>Avatar</th>
                    <th>Github</th>
                    <th>Facebook</th>
                    <th>Skype</th>
                    <th>Email</th>
                    <th>Trạng thái</th>
                    <th width="7%">Work</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $key => $val)
                <tr>
                    <td width="3%">{{$key}}</td>
                    <td>{{$val->email}}</td>
                    <td>{{$val->username}}</td>
                    <td>{{$val->fullname}}</td>
                    <td>{{$val->age}}</td>
                    <td><img src="{{asset($val->avatar)}}" width="50px" height="50px"></td>
                    <td><a href="{{$val->github}}">link</a></td>
                    <td><a href="{{$val->facebook}}">link</a></td>
                    <td><a href="{{$val->skype}}">link</a></td>
                    <td><a href="{{$val->email}}">link</a></td>
                    <td>
                        @if($val->isOnline())
                            <span style="color: red">Online</span>
					    @else
					  	    <span style="">Offline</span>
					    @endif
                    </td>
                    <td width="7%">
                        <div>
                            <button type="button" data-toggle="dropdown">Tasks
                            <span></span></button>
                            <ul style="width:67px;min-width:0px;">
                                {{-- <li><a href="{{route('admin.user.get.edit',$val->id)}}">edit</a>
                                <li><a href="{{route('admin.user.get.delete',$val->id)}}">delete</a> --}}
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th width="3%">STT</th>
                    <th>email</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Age</th>
                    <th>Avatar</th>
                    <th>Github</th>
                    <th>Facebook</th>
                    <th>Skype</th>
                    <th>Email</th>
                    <th>Trang thái</th>
                    <th width="7%">Work</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection