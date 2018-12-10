<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/master/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/master/header.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/master/navigation.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/master/footer.css')}}">

	<script type="text/javascript" src="{{asset('js/master/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/master/jquery-latest.min.js')}}"></script>
    
    @yield('head')
</head>
<body>

	<div id="header">
        <!-- <img src="{{asset('images/logo.png')}}"> -->
        <h1 id="titleLogo">D’Online Clothes</h1>
        @if(Session::has('name'))
        <p id="welcomeHello">Hello, {{Session::get('name')}}</p>
        @else
        <p id="welcomeHello">Hello, guest!</p>
        @endif
        <p id="welcomeHello">{{$mytime}}</p>

	</div>

	<div id="navigation">
		<ul>
			<li><a href="/">Home</a></li>
            <li><a href="/loginPage">Login</a></li>
            <li><a href="/registerPage">Register</a></li>
            <li><a href="/cart">Cart</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/category">Manage Categories</a></li>
			<li><a href="/promo">Manage Promo</a></li>
            <li><a href="/user">Manage Users</a></li>
            <li><a href="/transaction">Transaction History</a></li>
			<li><a href="/logout">Log Out</a></li>
		</ul>
	</div>

    <h1>@yield('bigTitle')</h1>

    <main>
        @yield('content')
    </main>

	<div id="footer">              
		<div id="footer_left">
			<div id="footer_contactus">
				<h4>Contact Us</h4>
				<p>D’Online@D.com </p>
				<p>021 456 8790</p>
            </div>
            <div id="footer_malls">
                    <a id="plaza_indonesia" href="http://www.plazaindonesia.com/" target="_blank">
                        <div class="float_left" >			
                            <p>Plaza Indonesia</p>
                            <div class="img" ></div>
                        </div>
                    </a>
                    <a id="grand_indonesia" href="https://www.grand-indonesia.com/" target="_blank">
                        <div class="float_left">
                            <p>Grand Indonesia</p>
                            <div class="img" ></div>
                        </div>
                    </a>
                    <a id="central_park" href="https://www.centralparkjakarta.com/" target="_blank">
                        <div class="float_left">
                            <p>Central Park</p>
                            <div class="img" ></div>
                        </div>
                    </a>
                    <a id="baywalk" href="http://baywalkmall.com/" target="_blank">
                        <div class="float_left">
                            <p>Baywalk Pluit Mall</p>
                            <div class="img" ></div>
                        </div>
                    </a>
                    <a id="kasablanka" href="https://www.kotakasablanka.co.id/" target="_blank">
                        <div class="float_left">
                            <p>Kota Kasablanka</p>
                            <div class="img" ></div>
                        </div>
                    </a>
            </div>
		</div>
		<div id="footer_right">
			<h4>Our Partners</h4>
			<a href="https://www.zara.com/" target="_blank">
				<img class="img" id="zara" src="{{asset('images/partners/zara.png')}}">
			</a>
			<a href="https://www.uniqlo.com/" target="_blank">		
				<img class="img" id="uniqlo" src="{{asset('images/partners/uniqlo.jpg')}}">
			</a>
		</div>
	</div>

</body>
</html>