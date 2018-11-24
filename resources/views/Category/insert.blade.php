@extends('master')
@section('title','Insert Category')
@section('bigTitle','Insert Category')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/insertNewCategory">
        {{csrf_field()}}
        <p class="labels">Category Name </p>
        <input type="text" name="categoryName" placeholder="Category Name"><br>
        <p class="labels">Category Gender </p>
        <select name="categoryGender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Unisex">Unisex</option>
        </select> <br>
        <p class="labels">Category Age </p>
        <input type="text" name="categoryAge" placeholder="Category Age"><br>
        <input type="submit" value="Insert">
    </form>
@endsection