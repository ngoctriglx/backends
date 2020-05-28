@extends('home.master')
@section('title','Home')
@section('content')
    @foreach($new as $val)
        @if($val->status == 1)
            <!-- Blog Post -->
            <div>
            <img src="{{$val->avatar}}" height="300px" alt="Card image cap">
            <div>
                <h2>{{$val->title}}</h2>
                <u><small>{{$val->category}}</small></u>
                <p>{{$val->description}}</p>
                <a href="{{route('home.get.content',$val->changetitle)}}">Read More &rarr;</a>
            </div>
            <div>
                Posted on <i>{{$val->created_at}}</i> by <b>{{$val->author}}</b>
            </div>
            </div>
        @endif
    @endforeach
@endsection
