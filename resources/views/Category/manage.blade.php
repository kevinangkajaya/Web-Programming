@extends('master')
@section('title','Manage Categories')
@section('bigTitle','Manage Categories')

@section('content')
    <div>
        <div class="insert">
            <a href="/insertCategory"><button>Insert New Category</button></a>
        </div>
    <table>
        <thead>
        <tr>
            <th>Category Name</th>
            <th>Category Gender</th>
            <th>Category Age</th>
            <th></th>
        </tr>
        </thead>

        @if(count($category)!=0)
            @foreach($category as $p)
                <tbody>
                <tr>
                    <td>{{$p->categoryName}}</td>
                    <td>{{$p->categoryGender}}</td>
                    <td>{{$p->categoryAge}}</td>
                    <td style="text-align:center;">
                        <a href="/updateCategory/{{$p->id}}"><button>Update Category</button></a>
                        <a href="/removeCategory/{{$p->id}}"><button>Remove Category</button></a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        @endif
    </table>
    </div>
@endsection