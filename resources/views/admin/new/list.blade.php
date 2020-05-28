@extends('admin.master')
@section('content')
    <table cellpadding="0" cellspacing="0" border="1" width="100%">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Category</th>
                <th>Avatar</th>
                <th>Status</th>
                <th width="7%">Work</th>
            </tr>
        </thead>
        <tbody>
            @foreach($new as $key => $val)
            <tr>
                <td width="3%">{{$key}}</td>
                <td>{{$val->title}}</td>
                <td>{{$val->description}}</td>
                <td>{{$val->author}}</td>
                <td>{{$val->category}}</td>
                <td><img src="{{asset($val->avatar)}}" width="50px" height="50px"></td>
                <td>
                    @if($val->status == 0)
                        Ẩn
                    @endif
                    @if($val->status == 1)
                        Hoạt Động
                    @endif
                </td>
                <td width="7%">
                    <div>
                        <ul style="width:67px;min-width:0px;">
                            <li><a href="{{route('admin.new.get.edit',$val->id)}}">edit</a>
                            <li><a href="">delete</a>
                                {{--  {{route('admin.new.post.delete',$val->id)}}  --}}
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
