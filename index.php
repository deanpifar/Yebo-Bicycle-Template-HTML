<!DOCTYPE html>
<html lang = "en" >
<head>
	<meta charset = "UTF-8" >
	
	<title>Bicycle Template - Homepage</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<link href='https://fonts.googleapis.com/css?family=Lato:700,300,400' rel='stylesheet' type='text/css'>

	<!-- StyleSheets -->
	<link rel = "stylesheet" href = "css/style.css" type = "text/css" >
	
	<!-- Favicon -->
	<link rel = 'shortcut icon' type = 'image/x-icon' href = 'favicon.png' >
	
</head>

<body>
	
	<?php include_once 'include/header.php'; ?>
	<main class="main">
		<div class="main__aboutus">
			<img src="images/aboutus_icon.png" alt="">
			<h2>A NEW GENERATION OF VINTAGE BIKE</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		</div>
		<div class="main__work">
			<div class="main__work__list">
				<div class="main__work__list-image">
					<img src="images/bike1_logo.png" alt="">
				</div>
				<div class="main__work__list-text">
					<img src="images/bike1_icon.png" alt="">
					<h3>vintage Oliva</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
					<hr>
					<img src="images/bike1_small.png" alt="">
				</div>
			</div>
			<div class="main__work__list">
				<div class="main__work__list-text">
					<img src="images/bike2_icon.png" alt="">
					<h3>La Boriosa</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
					<hr>
					<img src="images/bike2_small.png" alt="">
				</div>
				<div class="main__work__list-image" style="background-image: url(images/bike2_big.png);">
					<img src="images/bike2_logo.png" alt="">
				</div>
			</div>
			<div class="main__work__list-3">
				<div class="main__work__list-3-image-small">
					<img src="images/bike3_logo.png" alt="">
				</div>
				<div class="main__work__list-3-text">
					<img src="images/bike3_icon.png" alt="">
					<h3>retrò Bike - M. Hulot</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
					<hr>
					<img src="images/bike2_small.png" alt="">
				</div>
				<div class="main__work__list-3-image-small" style="background-image: url(images/bike3_big2.png);"></div>
			</div>
		</div>
		<div class="main__twitter">
			<img src="images/twitter_icon-body.png" alt="">
			<h4>AOD New York  @aod <span> /  35 min</span></h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. Nullam a odio porttitor, dictum turpis vitae, pretium ante amet.</p>
			<span class="active"></span>
			<span></span>
			<span></span>
		</div>
		<div class="main__shop">
			<div class="main__shop-left">
				<div style="background-image: url(images/shop-left-1.png);">
					<img src="images/shopnow_icon.png" alt="">
					<h3>Shop Now</h3>
				</div>
				<div style="background-image: url(images/shop-left-2.png);">
					<img src="images/shopnow_icon.png" alt="">
					<h3>Shop Now</h3>
				</div>
				<div style="background-image: url(images/shop-left-3.png);">
					<img src="images/shopnow_icon.png" alt="">
					<h3>Shop Now</h3>
				</div>
			</div>
			<div class="main__shop-middle">
				<div style="background-image: url(images/shop-middle-1.png);">
					<img src="images/shopnow_icon.png" alt="">
					<h3>Shop Now</h3>
				</div>
				<div style="background-image: url(images/shop-middle-2.png);">
					<img src="images/shopnow_icon.png" alt="">
					<h3>Shop Now</h3>
				</div>
			</div>
			<div class="main__shop-right">
				<div style="background-image: url(images/shop-right-1.png);">
					<img src="images/shopnow_icon.png" alt="">
					<h3>Shop Now</h3>
				</div>
				<div style="background-image: url(images/shop-right-2.png);">
					<img src="images/shopnow_icon.png" alt="">
					<h3>Shop Now</h3>
				</div>
				<div style="background-image: url(images/shop-right-3.png);">
					<img src="images/shopnow_icon.png" alt="">
					<h3>Shop Now</h3>
				</div>
			</div>
		</div>
		<div class="main__shopbutton">
			<a href="#">Discover the Shop</a>
		</div>
		<div class="main__newsletter">
			<img src="images/logo.png" alt="">
			<p>Stay on the saddle!</p>
			<form action="">
				<input type="email" placeholder="Enter your email..">
				<input type="submit" value="GO">
			</form>
		</div>
	</main>
	<?php include_once 'include/footer.php'; ?>
	
</body>

</html>