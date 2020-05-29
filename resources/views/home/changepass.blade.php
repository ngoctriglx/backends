@extends('home.master')
@section('title','Home')
@section('content')
        <form method="POST" action="{{route('home.post.changepass')}}">
            @csrf
          <div>
            
            <h4>Change your password</h4>
          </div>
          <div>
            <div>
              <label for="email">Old your password</label>
              <input type="password"  placeholder="Type here..." name="oldpass">
            </div>
            <div>
              <label for="pwd">New your password</label>
              <input type="password"  placeholder="Type here..." name="newpass">
            </div>
            <div>
              <label for="pwd">Re enter new your password</label>
              <input type="password"   placeholder="Type here..." name="renewpass">
            </div>
          </div>
          <div>
            <button type="button">Cancel</button>
            <button type="submit">Change</button>
          </div>
        </form>
@endsection