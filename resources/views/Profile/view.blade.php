@extends('master')
@section('title','Profile')
@section('bigTitle',@Session::get('name'))

@section('content')
    <style>
        #mainProfile{
            display:grid;
            grid-template-columns: 1fr 1fr;
        }
        #imgContainer{
            text-align: right;
            margin-right: 50px;
        }
        #profileContainer{
            display: grid;
            align-items: center;
            padding-bottom: 35px;
        }
        #mainProfile img{
            max-width:300px;
        }
    </style>
    <div id="mainProfile">
        <div>
            <div id="imgContainer">
                @if($user->pfp != NULL || $user->pfp != "")
                <img src="/images/pfp/{{$user->pfp}}">  
                @else
                <img src="{{asset('images/pfp/No_image_available.png')}}">                          
                @endif
                
            </div>
        </div>
        <div id="profileContainer">
            Full Name: {{$user->name}} <br>
            Email Address: {{$user->email}} <br>
            Phone Number: {{$user->phone}} <br>
            Gender: {{$user->gender}} <br>
            Address: {{$user->address}} <br>
        </div>
    </div>

    <div class="insert">
        <a href="/updateProfilePage"><button>Update Profile</button></a>
    </div>
@endsection