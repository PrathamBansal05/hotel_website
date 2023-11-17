<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Website - Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Link to your CSS stylesheet -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

	<style>
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
		}
		nav ul li a {
			color: #fff;
		}
		nav ul li a:hover {
			color: #ffd700;
		}
		.carousel-inner img {
			margin: auto;
    /* width: 90%; */
	height: 450px;
    width: 100%;
	transition-duration: 1s;
	
  }
  a:hover{
	color: yellow;
  }
  @keyframes header-animation {
    0% {
      opacity: 0;
      transform: translateY(-100px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Apply animation to the header */
  header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    animation-name: header-animation;
    animation-duration: 1s;
    animation-timing-function: ease-out;
  }
	</style>
</head>
<body>
	<header>
		<nav>
			<!-- Navigation links to other pages on your website -->
			<ul>
				<li class="oo"><a href="#">Home</a></li>
				<li class="oo"><a href="room.html">Rooms</a></li>
				<li class="oo"><a href="ameneties.html">Amenities</a></li>
				<li class="oo"><a href="image.html">Gallery</a></li>
				<li class="oo"><a href="contact_us.html">Contact Us</a></li>
				<?php
				if(!isset($_SESSION["username"])) {
					echo '<li class="login"><a href="login.php">Login</a></li>';
				}
				else{
				echo '<li class="login"><a href="logout.php">Logout</a></li>';
				}
				?>
			</ul>
			
		</nav>
		<br>
		<h1>HOTEL WEBSITE</h1>
		<p>Welcome to our hotel's website. We look forward to providing you with exceptional service and a memorable stay.</p>
		<!-- Call to action button to book a room -->
		<a href="book_hotel.php" class="button">Book Now</a>
		<a href="order_food.php" class="button">Order Food</a>
	</header>
	
	<main>
		<!-- Section to showcase the best features of your hotel -->
        <h2 class="hh2">Experience the Best of Our Hotel</h2>
		<section>
			
			<div id="demo" class="carousel slide" data-ride="carousel" data-interval="1500">

				<!-- Indicators -->
				<ul class="carousel-indicators">
				  <li data-target="#demo" data-slide-to="0" class="active"></li>
				  <li data-target="#demo" data-slide-to="1"></li>
				  <li data-target="#demo" data-slide-to="2"></li>
				</ul>
				
				<!-- The slideshow -->
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img height="500" width="1100" src="https://opalrealestateservices.com/wp-content/uploads/2021/12/Boutique-Hotel-for-Sale-in-Jerusalem-Israel-at-a-Prime-Location.jpg" alt="Hotel location">

				  </div>
				  <div class="carousel-item">
					<img height="500" width="1100" src="https://www.cataloniahotels.com/en/blog/wp-content/uploads/2019/10/What-are-amenities-destacada.jpg" alt="Hotel amenities">
				  </div>
				  <div class="carousel-item">
					<img height="500" width="1100" src="https://media.cnn.com/api/v1/images/stellar/prod/140127103345-peninsula-shanghai-deluxe-mock-up.jpg?q=w_2226,h_1449,x_0,y_0,c_fill" alt="Hotel rooms">

				  </div>
				</div>
				
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
				  <span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
				  <span class="carousel-control-next-icon"></span>
				</a>
			  </div>
		</section>
	</main>
	<hr>
	<main>
		<!-- Section to explore the hotel -->
		<h2 class="hh2">Explore Our Hotel</h2>
		<section class="features">
			<div class="feature-item">
				<img src="https://d248k8q1c80cf8.cloudfront.net/instagram69469816_666529210497805_6901877087283233097_n_4cb221d081.jpg" alt="Hotel lobby">
				<h3>Lobby</h3>
				<p>Our elegant lobby is the perfect place to relax and unwind after a long day of sightseeing or meetings.</p>
			</div>
			<div class="feature-item">
				<img src="https://assets.architecturaldigest.in/photos/63733ec2a2dd6ea6560eb6da/16:9/pass/Ditas%20Interior%20Image%20-%201%20(8).png" alt="Hotel restaurant">
				<h3>Restaurant</h3>
				<p>Enjoy a delicious meal at our onsite restaurant, which serves a variety of international and local dishes.</p>
			</div>
			<div class="feature-item">
				<img src="https://media-cdn.tripadvisor.com/media/photo-s/10/39/32/c7/akun-lounge-and-bar.jpg" alt="Hotel lounge">
				<h3>Lounge</h3>
				<p>Unwind with a drink at our cozy lounge, which offers a relaxing atmosphere and stunning views of the city.</p>
			</div>
		</section>
	</main>
	
	
	<footer>
		<!-- Footer information about your hotel -->
		<p>&copy; Hotel Website 2023. All rights reserved.</p>
	</footer>

</body>
</html>
