@extends('master')
@section('title','Manage Clothes')
@section('bigTitle','Manage Clothes')

@section('content')
    <style>
        #clothesGrid{
            display:grid;
            grid-template-columns: repeat(4,25%);
            grid-gap:5px;
            padding-top:10px;
        }
        .clothes-display{
            border-style: solid;
            padding-top:10px;
        }
        img{
            width:95%;
        }
    </style>

    <div>
        <div class="insert">
            <a href="/insertCloth"><button>Insert New Cloth</button></a>
        </div>
        
        <form action="/cloth" method="GET">
            <p class="labels">Search </p>
            <input text="text" placeholder="Name or Description" name="name">
            <button type="submit" >Submit</button>
        </form>

        <div id="clothesGrid">
        @if(count($cloth)!=0)
            @foreach($cloth as $p)
                <div class="clothes-display" style="text-align:center;">
                    <img src="/images/clothing/{{$p->clothDirectory}}">
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
        </div>

        {{$cloth->render()}}
    </div>
@endsection