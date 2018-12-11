@extends('master')
@section('title','Cart')
@section('bigTitle','Cart')

@section('content')
    <style>
        table{
            text-align:center;
            width:75%;
            margin: 0 auto;
        }
        table tbody tr td img{
            max-height:200px;
            width:auto;
        }
    </style>
    <div>
        @php($total = 0);

         <!--Display Error-->
        <div class="errors">
            @foreach($errors->all() as $e)
                <p>{{$e}}</p>
            @endforeach
        </div>

        <table>
            <thead>
                <tr>
                    <th>Pictures</th>
                    <th>Cloth Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            @if(count($cart)!=0)
                @foreach($cart as $p)
                    @php($total += ($p->clothes->clothPrice*$p->qty))
                        <tr>
                            <td><img src="/images/clothing/{{$p->clothes->clothDirectory}}"></td>
                            <td>{{$p->clothes->clothName}}</td>
                            <td>{{$p->qty}}</td>
                            <td>Rp{{number_format ($p->clothes->clothPrice*$p->qty,0,',','.')}}</td>
                            <td style="text-align:center;">
                                <a href="/removeFromCart/{{$p->id}}"><button>Remove</button></a>
                            </td>
                        </tr>
                @endforeach
            @endif
            </tbody>
        </table>

        <form method="POST" action="/checkout/{{$total}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <p class="labels">Promo Code</p>
            <input type="text" name="promoCode"><br>
            <p class="labels">Total Price:</p> Rp{{number_format ($total,0,',','.')}}
            <input type="submit" value="Checkout">
        </form>
    </div>
@endsection