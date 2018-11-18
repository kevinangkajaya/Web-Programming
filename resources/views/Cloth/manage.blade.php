@extends('master')
@section('title','Manage Clothes')
@section('bigTitle','Manage Clothes')

@section('content')
    <div>
        <div style="text-align:center;">
            <a href="/insertCloth"><button>Insert New Cloth</button></a>
        </div>
    <table>
        <thead>
        <tr>
            <th>Cloth Name</th>
            <th>Cloth Price</th>
            <th>Cloth Description</th>
            <th></th>
        </tr>
        </thead>

        @if(count($cloth)!=0)
            @foreach($cloth as $p)
                <tbody>
                <tr>
                    <td>{{$p->clothName}}</td>
                    <td>{{$p->clothPrice}}</td>
                    <td>{{$p->clothDescription}}</td>
                    <td style="text-align:center;">
                        <a href="/updateCloth/{{$p->id}}"><button>Update Cloth</button></a>
                        <a href="/removeCloth/{{$p->id}}"><button>Remove Cloth</button></a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        @endif
    </table>
    </div>
@endsection