@extends('master')
@section('title','Manage Users')
@section('bigTitle','Manage Users')

@section('content')
    <div>
        <table>
            <thead>
            <tr>
                <th>Profile Picture</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Address</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @if(count($user)!=0)
                @foreach($user as $p)
                    <tr>
                        <td>
                            <div id="imgContainer">
                                @if($p->pfp != NULL || $p->pfp != "")
                                    <img src="/images/pfp/{{$p->pfp}}" style="max-width: 100%; max-height: 100%; height: 100px; width: 100px;">
                                @else
                                    <img src="{{asset('images/pfp/No_image_available.png')}}" style="max-width: 100%; max-height: 100%; height: 100px; width: 100px;">
                                @endif
                            </div>
                        </td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->phone}}</td>
                        <td>{{$p->gender}}</td>
                        <td>{{$p->address}}</td>
                        <td style="text-align:center;">
                            <a href="/updateUser/{{$p->id}}"><button>Update User</button></a>
                            <a href="/removeUser/{{$p->id}}"><button>Remove User</button></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection