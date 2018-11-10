@extends('master')
@section('title','Insert Promo')

@section('content')
    <form method="POST" action="/insertNewPromo">
        {{csrf_field()}}
        <input type="text" name="promoName" placeholder="Promo Name"><br>
        <input type="text" name="promoCode" placeholder="Promo Code"><br>
        <input type="text" name="promoDisc" placeholder="Promo Discount"><br>
        <input type="date" name="startDate" placeholder="Start Date"><br>
        <input type="date" name="endDate" placeholder="End Date"><br>
        <input type="submit" value="Insert">
    </form>
    <!--Display Error-->

    @foreach($errors->all() as $e)
        <p>{{$e}}</p>
    @endforeach
@endsection