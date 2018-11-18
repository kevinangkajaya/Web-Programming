@extends('master')
@section('title','Insert Promo')
@section('bigTitle','Insert Promo')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/insertNewPromo">
        {{csrf_field()}}
        <p class="labels">Promo Name </p>
        <input type="text" name="promoName" placeholder="Promo Name"><br>
        <p class="labels">Promo Code </p>
        <input type="text" name="promoCode" placeholder="Promo Code"><br>
        <p class="labels">Promo Discount </p>
        <input type="text" name="promoDisc" placeholder="Promo Discount"><br>
        <p class="labels">Start Date </p>
        <input type="date" name="startDate" placeholder="Start Date"><br>
        <p class="labels">End Date </p>
        <input type="date" name="endDate" placeholder="End Date"><br>
        <input type="submit" value="Insert">
    </form>
@endsection