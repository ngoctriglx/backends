@extends('admin.master')
@section('title','Dash Board')
@section('content')
<div>
	<div>
		User <a href="#"><i></i><b>{{$user}}</b></a>
		Admin</a><a href="#" ><i></i><b>{{$admin}}</b></a>
		New</a><a href="#" ><i></i><b>{{$new}}</b></a>
	</div>
	<div>
		Comment<a href="#" ><i></i><b>{{$cmt}}</b></a>
		Category</a><a href="#"><i></i><b>{{$cate}}</b></a>
		View</a><a href="#"><i></i><b>{{$sum}}</b></a>
	</div>
</div>
@endsection