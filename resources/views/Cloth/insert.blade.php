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

    <form method="POST" action="/insertNewCloth" enctype="multipart/form-data">
        {{csrf_field()}}
        <p class="labels" Cloth Category></p>
        <select name="clothCategory">
            <option value="">Select Category</option>
            @foreach($category as $c)
                <option value="{{$c}}">{{$c}}</option>
            @endforeach
        </select> <br>
        <p class="labels">Cloth Name </p>
        <input type="text" name="clothName" placeholder="Cloth Name"><br>
        <p class="labels">Cloth Price </p>
        <input type="text" name="clothPrice" placeholder="Cloth Price"><br>
        <p class="labels">Cloth Description </p>
        <input type="text" name="clothDescription" placeholder="Cloth Description"><br>
        <p class="labels">Cloth Stock </p>
        <input type="text" name="clothStock" placeholder="Cloth Stock"><br>
        <input type="file" name="clothImage"><br>
        <input type="submit" value="Insert">
    </form>
@endsection