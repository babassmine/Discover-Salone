<!DOCTYPE HTML>

<html>
	<head>
		<title>Bars</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--favicon-->
		<link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
		<link rel="manifest" href="fav/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="fav/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!--favicon-->
	</head>
	<body>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=340406969479037";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '340406969479037',
		  xfbml      : true,
		  version    : 'v2.3'
		});
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "//connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="bars.html">Bars</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Categories</a>
							<ul>
								<li><a href="hotels.php">Hotels</a></li>
								<li><a href="restaurants.php">Restaurants</a></li>
								<li><a href="bars.php">Bars</a></li>
								<li><a href="guest_houses.php">Guest Houses</a></li>
								<li><a href="beaches.html">Beaches</a></li>
								<li><a href="grocery_stores.html">Grocery Stores</a></li>
								
							</ul>
						</li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Bars</h2>
					<p></p>
				</header>
				<div class="box">
					<span class="image featured"><img src="images/3.jpg" alt="" /></span>
					<h3><strong>Webpage on construction!</strong></h3>
					<p></p>
					<?php
							$file = file_get_contents('nightlife.csv');
							$items = explode(PHP_EOL, $file);
							foreach($items as $item){
								if ($item ==""){}
								else{
								$item = explode(",", $item);
								echo ('<h3><strong>'.$item[1].'</strong></h3>');
								echo ('<p><strong>Address: </strong>'.$item[2].'<br>');
								echo ('<strong>Phone No. :</strong>'.$item[7].'<br>');
								if ($item[4]==" NULL"){
									echo ('<strong>Email :</strong>Not available<br>');
								}else{
									echo ('<strong>Email :</strong>'.$item[4].'<br>');
								}
								
								if ($item[5]==" NULL"){
									echo ('<strong>Email :</strong>Not available<br>');
								}else{
									echo ('<strong>Email :</strong>'.$item[5].'<br>');
								}
								if($item[8]!="NULL"){
								echo('<div
									  class="fb-like"
									  data-share="true"
									  data-href="'.$item[8].'"
									  data-width="450"
									  data-show-faces="true">
									</div>');
								echo('<div class="fb-comments" data-href="'.$item[8].'" data-width="400" data-numposts="5" data-colorscheme="light"></div>');
								}
								}
							}
								
								$file = file_get_contents('casino.csv');
							$items = explode(PHP_EOL, $file);
							foreach($items as $item){
								if ($item ==""){}
								else{
								$item = explode(",", $item);
								echo ('<h3><strong>'.$item[1].'</strong></h3>');
								echo ('<p><strong>Address: </strong>'.$item[2].'<br>');
								echo ('<strong>Phone No. :</strong>'.$item[7].'<br>');
								if ($item[4]==" NULL"){
									echo ('<strong>Email :</strong>Not available<br>');
								}else{
									echo ('<strong>Email :</strong>'.$item[4].'<br>');
								}
								
								if ($item[5]==" NULL"){
									echo ('<strong>Email :</strong>Not available<br>');
								}else{
									echo ('<strong>Email :</strong>'.$item[5].'<br>');
								}
								if($item[8]!="NULL"){
								echo('<div
									  class="fb-like"
									  data-share="true"
									  data-href="'.$item[8].'"
									  data-width="450"
									  data-show-faces="true">
									</div>');
								echo('<div class="fb-comments" data-href="'.$item[8].'" data-width="400" data-numposts="5" data-colorscheme="light"></div>');
								}
								}
							}
					?>
					<div class="row">
						<div class="6u 12u(mobilep)">
							<h3></h3>
							<p></p>
						</div>
						<div class="6u 12u(mobilep)">
							<h3></h3>
							<p></p>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://twitter.com/Discover_Salone" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/DiscoverSaloneOfficial" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					
					<li><a href="https://plus.google.com/u/0/110589926524074851196/posts" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; DiscoverSalone. All rights reserved.</li>
				</ul>
			</footer>

	</body>
</html>
