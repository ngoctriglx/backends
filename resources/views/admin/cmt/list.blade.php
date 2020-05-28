@extends('admin.master')
@section('title','List comment')
@section('content')
<select name="" id="">
    <option value=""><a href="">hihi</a></option>
    <option value=""><a href="">haha</a></option>
</select>
<br>
<br>
<table cellpadding="0" cellspacing="0" border="1"  width="80%">
    <thead>
        <tr>
            <th width="3%">STT</th>
            <th>Content</th>
            <th>Username</th>
            <th>New</th>
            <th>Report</a></th>
            <th>Work</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cmt as $key => $val1)
        @foreach($new as $val2)
        @foreach($user as $val3)
        @if($val1->user_id == $val3->id)
        @if($val1->new_id == $val2->id)
        <tr>
            <td width="3%">{{$key}}</td>
            <td>{{$val1->content}}</td>
            <td>{{$val3->username}}</td>
            <td>{{$val2->title}}</td>
            {{-- <td>{{$val1->status}}</td> --}}
            <td>{{$val1->report}}</td>
            <td>
                <div>
                    <ul>
                        {{-- <li><a href="{{route('admin.cmt.get.edit',$val1->id)}}">Ẩn</a> --}}
                        {{-- <li><a href="{{route('admin.cmt.get.edit',$val1->id)}}">Ẩn</a> --}}
                    {{-- <form action="" method="POST">
                        @if ($val1->status == 0)
                            <li><a href="{{route('admin.cmt.post.status',['id' =>$val1->id,'status' => 1])}}">Hoạt động</a></li>
                        @else
                            <li><a href="{{route('admin.cmt.post.status',['id' =>$val1->id,'status' => 0])}}">Ẩn</a></li>
                        @endif
                    </form> --}}
                        <li><a href="{{route('admin.cmt.get.delete',$val1->id)}}">delete</a>
                    </ul>
                </div>
            </td>
        </tr>
        @endif
        @endif
        @endforeach
        @endforeach
        @endforeach
    </tbody>
</table>
@endsection