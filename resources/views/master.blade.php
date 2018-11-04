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
        <p id="welcomeHello">Hello, guest!</p>
	</div>

	<div id="navigation">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="products.html">Products</a></li>
			<li><a href="order.html">Order</a></li>
			<li>
				<a>More Information</a>
			 	<ul>
					<li><a href="partner.html">Partner</a></li>
					<li><a href="contactus.html">Contact Us</a></li>
			 	</ul>
			</li>
		</ul>
	</div>

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
                <div id="upper_row_malls">
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
                </div>
                <div id="lower_row_malls">
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