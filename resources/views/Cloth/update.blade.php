@extends('master')
@section('title','Update Cloth')
@section('bigTitle','Update Cloth')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/updateCurrentCategory/{{$category->id}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <p class="labels" Cloth Category></p>
        <select name="clothCategory">
            <option value="">Select Category</option>
            @foreach($category as $c)
                <option value="{{$c}}">{{$c}}</option>
            @endforeach
        </select> <br>
        <p class="labels">Cloth Name </p>
        <input type="text" name="clothName" value="{{$category->clothName}}"><br>
        p class="labels">Cloth Price </p>
        <input type="text" name="clothPrice" value="{{$category->clothPrice}}" placeholder="Cloth Price"><br>
        <p class="labels">Cloth Description </p>
        <input type="text" name="clothDescription" value="{{$category->clothDescription}}" placeholder="Cloth Description"><br>
        <p class="labels">Cloth Stock </p>
        <input type="text" name="clothStock" value="{{$category->clothStock}}" placeholder="Cloth Stock"><br>
        <input type="file" name="clothImage"><br><input type="submit" value="Update">
    </form>

    <script>
        $('select[name="clothCategory"]').val('{{$category->clothCategory}}');
    </script>
@endsection