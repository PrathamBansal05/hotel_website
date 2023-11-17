<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Link to your CSS stylesheet -->
	<link rel="stylesheet" href="register.css">
</head>
<body>
	<header>
		<nav>
			<!-- Navigation links to other pages on your website -->
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact_us.html">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	
	<?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($con, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $address  = stripslashes($_REQUEST['address']);
            $address  = mysqli_real_escape_string($con, $address);
            $phone_number = stripslashes($_REQUEST['phone_number']);
            $phone_number = mysqli_real_escape_string($con, $phone_number);
            $create_datetime = date("Y-m-d H:i:s");
            $query    = "INSERT into `users` (username, password, email, address, phone_number,create_datetime)
                        VALUES ('$username', '" . md5($password) . "', '$email','$address','$phone_number' , '$create_datetime')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='form'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
            } else {
                echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                    </div>";
            }
        } else {
    ?>
        <main>
        <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <input type="text" name="username" placeholder="Username" required >
            <input type="text" name="email" placeholder="Email Address" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="tel" name="phone_number" placeholder="Phone Number">
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link"><a href="login.php">Click to Login</a></p>
        </form>
        </main>
    <?php
        }
    ?>

	</main>
</body>
</html>

