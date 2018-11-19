@extends('master')
@section('title','Manage Clothes')
@section('bigTitle','Manage Clothes')

@section('content')
    <style>
        .clothes-display{
            border-style: solid;
            border-width: 2px;
            margin: 10px;
            display: inline-block;
        }
    </style>

    <div>
        <div style="text-align:center;">
            <a href="/insertCloth"><button>Insert New Cloth</button></a>
        </div>
        
        <form action="/searchCloth" method="GET">
            <input text="text" placeholder="Name or Description" name="name">
            <button type="submit" >Submit</button>
        </form>

        @if(count($cloth)!=0)
            @foreach($cloth as $p)
                <div class="clothes-display" style="text-align:center;">
                    <img src="/images/clothing/{{$p->clothDirectory}}" width="200" height="200">
                    <div style="text-align:center;">
                        <h3>{{$p->clothName}}</h3>
                        <p>Category: {{$p->categories->categoryName}}</p>
                        <p>Price: {{$p->clothPrice}}</p>
                        <p>Stock: {{$p->clothStock}}</p>
                        <p>Description: {{$p->clothDescription}}</p>
                        <p>
                            <a href="/updateCloth/{{$p->id}}"><button>Update Cloth</button></a>
                            <a href="/removeCloth/{{$p->id}}"><button>Remove Cloth</button></a>
                            <a href=""><button>Add to Cart</button></a>
                        </p>
                    </div>
                </div>
            @endforeach
        @endif

        <!-- {{$cloth->render()}} -->
    </div>
@endsection