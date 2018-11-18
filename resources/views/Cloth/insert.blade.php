@extends('master')
@section('title','Insert Cloth')
@section('bigTitle','Insert Cloth')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/insertNewCloth">
        {{csrf_field()}}
        <p class="labels">Cloth Name </p>
        <input type="text" name="clothName" placeholder="Cloth Name"><br>
        <p class="labels">Cloth Gender </p>
        <select name="categoryGender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select> <br>
        <p class="labels">Category Age </p>
        <input type="text" name="categoryAge" placeholder="Category Age"><br>
        <input type="submit" value="Insert">
    </form>
@endsection