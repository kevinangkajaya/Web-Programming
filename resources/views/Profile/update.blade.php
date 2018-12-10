@extends('master')
@section('title','Update Profile')
@section('bigTitle','Update Profile')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/updateProfile" enctype="multipart/form-data">
        {{csrf_field()}}        
        <p class="labels">Full Name </p>
        <input type="text" name="fullName" value="{{$user->name}}"><br>
        <p class="labels">Email </p>
        <input type="email" name="userEmail" value="{{$user->email}}"><br>
        <p class="labels">Phone </p>
        <input type="text" name="userPhone" value="{{$user->phone}}"><br>
        <p class="labels">Gender </p>
        <select name="userGender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select> <br>
        <p class="labels">Address </p>
        <textarea rows="3" type="text" name="userAddress" placeholder="Address">{{$user->address}}</textarea><br>
        <input type="file" name="userPfp"><br>
        <input type="submit" value="Update">
    </form>
    <script>
        $('select[name="userGender"]').val('{{$user->gender}}');
    </script>
@endsection