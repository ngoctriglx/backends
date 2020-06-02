@extends('home.master')
@section('content')
    <form action="{{route('home.forgotpassword')}}" method="POST">
        @csrf
        <input type="email" name="email" id="" placeholder="Nhập mail của bạn ...">
        <p><button type="submit">Gửi</button></p>
    </form>
@endsection