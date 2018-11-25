@extends('master')
@section('title','Update Promo')
@section('bigTitle','Update Promo')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/updateCurrentPromo/{{$promo->id}}">
        {{csrf_field()}}
        <p class="labels">Promo Name </p>
        <input type="text" name="promoName" value="{{$promo->promoName}}"><br>
        <p class="labels">Promo Code </p>
        <input type="text" name="promoCode" value="{{$promo->promoCode}}"><br>
        <p class="labels">Promo Discount </p>
        <input type="text" name="promoDisc" value="{{$promo->promoDisc}}"><br>
        <p class="labels">Start Date </p>
        <input type="date" name="startDate" value="{{$promo->startDate}}"><br>
        <p class="labels">End Date </p>
        <input type="date" name="endDate" value="{{$promo->endDate}}"><br>
        <input type="submit" value="Update">
    </form>
@endsection