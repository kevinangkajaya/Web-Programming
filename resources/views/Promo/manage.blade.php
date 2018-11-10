@extends('master')
@section('title','Manage Promo')

@section('content')
    <div>
        <div style="text-align:center;">
            <a href="/insertPromo"><button>Insert New Promo</button></a>
        </div>
    <table>
        <thead>
        <tr>
            <th>Promo Code</th>
            <th>Promo Name</th>
            <th>Promo Discount</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th></th>
        </tr>
        </thead>

        @if(count($promo)!=0)
            @foreach($promo as $p)
                <tbody>
                <tr>
                    <td>{{$p->promoCode}}</td>
                    <td>{{$p->promoName}}</td>
                    <td>{{$p->promoDisc}}</td>
                    <td>{{$p->startDate}}</td>
                    <td>{{$p->endDate}}</td>
                    <td style="text-align:center;">
                        <a href="/updatePromo/{{$p->id}}"><button>Update Promo</button></a>
                        <a href="/removePromo/{{$p->id}}"><button>Remove Promo</button></a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        @endif
    </table>
    </div>
@endsection