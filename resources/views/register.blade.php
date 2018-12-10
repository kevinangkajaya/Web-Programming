@extends('master')
@section('title','Register')
@section('bigTitle','Register New User')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/register" enctype="multipart/form-data">
        {{csrf_field()}}        
        <p class="labels">Full Name </p>
        <input type="text" name="fullName" placeholder="Full Name"><br>
        <p class="labels">Email </p>
        <input type="email" name="userEmail" placeholder="Email"><br>
        <p class="labels">Password </p>
        <input type="password" name="password" placeholder="Password"><br>
        <p class="labels">Confirm Password </p>
        <input type="password" name="password_confirmation" placeholder="Password"><br>
        <p class="labels">Phone </p>
        <input type="text" name="userPhone" placeholder="Phone"><br>
        <p class="labels"> Gender </p>
        <select name="userGender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select> <br>
        <p class="labels">Address </p>
        <textarea rows="3" type="text" name="userAddress" placeholder="Address"></textarea><br>
        <input type="file" name="userPfp"><br>
        <input type="submit" value="Register">
    </form>
@endsection