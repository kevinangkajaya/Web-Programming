@extends('master')
@section('title','D’Online Clothes')
@section('bigTitle','Home')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <script type="text/javascript" src="{{asset('js/home.js')}}"></script>
@endsection

@section('content')
    <div id="content-home" class="content">
		<div id="banner">
			<!-- <div id="laquo_div"> -->
			<!-- </div> -->
			<div id="slider">
				<div type="button" id="laquo">
					<input type="button" value="<">
				</div>
				<div class="slides">
					<div class="slide"><img src="{{asset('images/banner/news_1.png')}}"></div>
					<div class="slide"><img src="{{asset('images/banner/banner_1.png')}}"></div>
					<div class="slide"><img src="{{asset('images/banner/news_2.png')}}"></div>
					<div class="slide"><img src="{{asset('images/banner/banner_2.png')}}"></div>
				</div>
				<div type="button" id="raquo">
					<input type="button" value=">">
				</div>
			</div>
			<!-- <div id="raquo_div"> -->
			<!-- </div> -->
			
		</div>

		<div id="new">
			<h2>New Products</h2>
			<div class="product">
				<img src="{{asset('images/clothing/cloth.jpg')}}">
				<div class="detail">
					<span class="title">JACKET WITH CONTRASTING TRIM & BERMUDA SHORTS</span>
					<br><br><span class="description"> Linen blend Bermuda shorts with a contrasting trim along the hems. They feature front pockets, false welt pockets in the back, front pleats and metal zip, inside button and hook fastening in the front.</span>
				</div>
			</div>
			<div class="product">
				<img src="{{asset('images/clothing/cloth3.jpg')}}">
				<div class="detail">
					<span class="title">FLORAL PRINT WRAP JUMPSUIT</span>
					<br><br><span class="description">Flowing V-neck jumpsuit with short cape-style sleeves that cross in the front and tie at one side with a matching fabric bow. Features a central opening at the back, wide-leg trousers and button and back zip fastening hidden in the central seam.</span>
				</div>
			</div>
			<div class="product">
				<img src="{{asset('images/clothing/cloth4.jpg')}}">
				<div class="detail">
					<span class="title">ASYMETRIC TUNIC WITH BOW </span>
					<br><br><span class="description"> Lightweight V-neck tunic with sleeves falling below the elbow. Features pleats on the waist with a matching tied bow detail, an asymmetric hem and an inside hook that fastens in the front.</span>
				</div>
			</div>

			<div class="product">
				<img src="{{asset('images/clothing/cloth6.jpg')}}">
				<div class="detail">
					<span class="title">EMBROIDERED BLOUSE WITH PERFORATIONS </span>
					<br><br><span class="description"> Sleeveless round neck blouse with mini ruffle trims and ruffles on the arm holes. Features a lace trim on the chest and buttoned opening in the back.</span>
				</div>
			</div>
		</div>
	</div>
@endsection