@extends('master')
@section('title','History')
@section('bigTitle','Transaction History')

@section('content')
    <style>
        table{
            text-align:center;
            width:75%;
            margin: 0 auto;
        }
        .details{
            width:75%;
            margin: 0 auto;
        }
        table tbody tr td img{
            max-height:200px;
            width:auto;
        }
        p{
            margin:0;
        }
        hr{
            width:85%;
            margin-bottom:50px;
            margin-top: 30px;
        }
    </style>
    <div>
        @if(count($transHeader)!=0)
            @foreach($transHeader as $head)
                @php($total = 0);
                <hr>
                <div class="details">
                    <p>Transaction ID: {{$head->id}} </p>
                    <p>Buyer: {{$head->users->name}} </p>
                    <p>Buy Date: {{$head->date}} </p>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Pictures</th>
                            <th>Cloth Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                    @if(count($transDetail)!=0)
                        @foreach($transDetail as $detail)
                            @if($head->id == $detail->transactionHeaderID)
                                @php($total += ($detail->clothes->clothPrice*$detail->qty))
                                <tr>
                                    <td><img src="/images/clothing/{{$detail->clothes->clothDirectory}}"></td>
                                    <td>{{$detail->clothes->clothName}}</td>
                                    <td>{{$detail->qty}}</td>
                                    <td>Rp{{number_format ($detail->clothes->clothPrice*$detail->qty,0,',','.')}}</td>                                    
                                </tr>
                            @endif
                        @endforeach
                    @endif                    
                    </tbody>
                </table>
                <div class="details"> 
                    @if($head->promoID != null)
                        <p>Total Price (Before Discount): Rp{{number_format ($total,0,',','.')}} </p>
                        <p>Promo Name: {{$head->promo->promoName}} </p>
                        <p>Discount: {{$head->promo->promoDisc}}% | Rp{{number_format ($total*$head->promo->promoDisc/100 ,0,',','.')}} </p>
                    @else
                    <p>Total Price (Before Discount): Rp{{number_format ($total,0,',','.')}} </p>
                    <p>Promo Name: </p>
                    <p>Discount: </p>
                    @endif
                    <p>Total Price (After Discount): Rp{{number_format ($head->totalPrice,0,',','.')}}</p>
                </div>
                
            @endforeach
        @endif

    </div>
@endsection