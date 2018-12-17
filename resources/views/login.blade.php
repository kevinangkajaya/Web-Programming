@extends('master')
@section('title','Login')
@section('bigTitle','Login')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/login">
        {{csrf_field()}}
        <p class="labels">Email address </p>
    <input type="email" name="email" value="{{Cookie::get("email")}}"><br>
        <p class="labels">password </p>
    <input type="password" name="password" value="{{Cookie::get("password")}}"><br>
        <input type="checkbox" name="checkbox" style="width:unset;">Remember Me<br>
        
        <input type="submit" value="Login">
    </form>
@endsection