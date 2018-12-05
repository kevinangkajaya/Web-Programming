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
        <input type="text" name="username" placeholder="Full Name"><br>

        <p class="labels">Email </p>
        <input type="email" name="useremail" placeholder="Email"><br>

        <p class="labels">Password </p>
        <input type="password" name="userpassword" placeholder="Password"><br>

        <p class="labels">Confirm Password </p>
        <input type="password" name="userconfirmpass" placeholder="Confirm Password"><br>

        <p class="labels">Phone </p>
        <input type="text" name="userphone" placeholder="Phone"><br>

        <p class="labels">Category Gender </p>
        <select name="usergender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select> <br>

        <p class="labels">Address </p>
        <textarea rows="3" type="text" name="useraddress" placeholder="Address"></textarea><br>
        
        <input type="file" name="userPfp"><br>

        <input type="submit" value="Register">

    </form>
@endsection