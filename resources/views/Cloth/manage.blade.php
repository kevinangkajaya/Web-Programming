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
        .pagination{
            display: flex;
            justify-content: center;
        }
        .pagination li{
            list-style: none;
            margin: 0 2%;
        }
        .clothImage{
            height:320px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .clothImage img{
            max-height:320px;
            width:auto;
            max-width:95%;
        }
        .clothInfo{
            height:340px;
        }
    </style>

    <div>
        @if(Session::has('role') && Session::get('role')=='admin')
        <div class="insert">
            <a href="/insertCloth"><button>Insert New Cloth</button></a>
        </div>
        @endif
        
        <form action="/cloth" method="GET">
            <p class="labels">Search </p>
            <input text="text" placeholder="Name or Description" name="name">
            <button type="submit" >Submit</button>
        </form>

        <div id="clothesGrid">
        @if(count($cloth)!=0)
            @foreach($cloth as $p)
                <div class="clothes-display" style="text-align:center;">
                    <div class="clothImage">
                        <div>
                            <img src="/images/clothing/{{$p->clothDirectory}}">
                        </div>
                    </div>
                    <div style="text-align:center;">
                        <div class="clothInfo">
                            <h3>{{$p->clothName}}</h3>
                            <p>Category: {{$p->categories->categoryName}}</p>
                            <p>Price: {{$p->clothPrice}}</p>
                            <p>Stock: {{$p->clothStock}}</p>
                            <p>Description: {{$p->clothDescription}}</p>
                        </div>
                        <p>
                            @if(Session::has('role'))
                                @if(Session::get('role')=='admin')
                                <a href="/updateCloth/{{$p->id}}"><button>Update Cloth</button></a>
                                <a href="/removeCloth/{{$p->id}}"><button>Remove Cloth</button></a>
                                @elseif(Session::get('role')=='member')
                                <a href="/addToCart/{{$p->id}}"><button>Add to Cart</button></a>
                                @endif
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
        </div>

        {{$cloth->links()}}
    </div>
@endsection