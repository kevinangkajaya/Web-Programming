@extends('master')
@section('title','Update Category')
@section('bigTitle','Update Categories')

@section('content')
    <!--Display Error-->
    <div class="errors">
        @foreach($errors->all() as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>

    <form method="POST" action="/updateCurrentCategory/{{$category->id}}">
        {{csrf_field()}}
        <p class="labels">Category Name </p>
        <input type="text" name="categoryName" value="{{$category->categoryName}}"><br>
        <p class="labels">Category Gender </p>
        <select name="categoryGender" value="{{$category->categoryGender}}">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <p class="labels">Category Age </p>
        <input type="text" name="categoryAge" value="{{$category->categoryAge}}"><br>
        <input type="submit" value="Update">
    </form>

    <script>
        $('select[name="categoryGender"]').val('{{$category->categoryGender}}');
    </script>
@endsection