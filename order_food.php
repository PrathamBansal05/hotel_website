<?php
require('db.php');
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Food</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Link to your CSS stylesheet -->
	<link rel="stylesheet" href="order_food.css">
</head>
<body>
	<header>
		<nav>
			<!-- Navigation links to other pages on your website -->
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="room.html">Rooms</a></li>
				<li><a href="ameneties.html">Amenities</a></li>
				<li><a href="image.html">Gallery</a></li>
				<li><a href="contact_us.html">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<h2>Order Food</h2>
		<p>Please select the items you would like to order:</p>
		<div class="wra">
			<form>
				<fieldset>
					<legend>Breakfast</legend>
					<input type="checkbox" name="item1" id="item1">
					<label for="item1">Pancakes ($8.99)</label><br>
					
					<input type="checkbox" name="item2" id="item2">
					<label for="item2">French Toast ($7.99)</label><br>
					
					<input type="checkbox" name="item3" id="item3">
					<label for="item3">Bagel with Cream Cheese ($5.99)</label><br>
				</fieldset>
				
				<fieldset>
					<legend>Lunch</legend>
					<input type="checkbox" name="item4" id="item4">
					<label for="item4">Burger with Fries ($10.99)</label><br>
					
					<input type="checkbox" name="item5" id="item5">
					<label for="item5">Grilled Chicken Sandwich ($9.99)</label><br>
					
					<input type="checkbox" name="item6" id="item6">
					<label for="item6">Caesar Salad ($8.99)</label><br>
				</fieldset>
				
				<fieldset>
					<legend>Dinner</legend>
					<input type="checkbox" name="item7" id="item7">
					<label for="item7">Filet Mignon ($25.99)</label><br>
					
					<input type="checkbox" name="item8" id="item8">
					<label for="item8">Salmon with Rice ($19.99)</label><br>
					
					<input type="checkbox" name="item9" id="item9">
					<label for="item9">Vegetable Stir Fry ($14.99)</label><br>
				</fieldset>
				
				<button type="submit" class="button"><a href="payment.html">Submit</a></button>
			</form>
		</div>

		
	</main>
	<footer>
		<!-- Footer information about your hotel -->
		<p>&copy; Your Hotel Name 2023. All rights reserved.</p>
	</footer>
</body>
</html>