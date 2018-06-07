<?php
//login.php

require_once 'includes/global.inc.php';

$error = "";
$username = "";
$password = "";

//check to see if they've submitted the login form
if(isset($_POST['submit-login'])) { 

	$username = $_POST['username'];
	$password = $_POST['password'];

	$userTools = new UserTools();
	if($userTools->login($username, $password)) { 
		//successful login, redirect them to a page
		header("Location: index.php");
	} else {
		$error = "Incorrect username or password. Please try again.";
	}
}
?>

<!doctype html>
<html>
<head>
        <title>Lush - Login</title>

    <link rel="stylesheet" href="./unslider-master/dist/css/unslider.css">
    <link rel="stylesheet" href="./unslider-master/dist/css/unslider-dots.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
<header>
    <a href="index.php"><img id="logo" src="./assets/img/homepageimages/Lush_logo_black.png" alt="LUSH logo"/></a>
    <nav id="mainNav">
        <ul>
            <li>
                <a href="cart.php">CART</a>
            </li>
            <li>
                <a href="profile.php">PROFILE</a>
            </li>
            <li>
                <a href="products.php">PRODUCTS</a>
            </li>
                <?php if(isset($_SESSION['logged_in'])) : ?>
                <?php $user = unserialize($_SESSION['user']); ?>
            <li>
                <a href="logout.php">Log Out</a>
            </li>
            <li>
                <a href="profile.php">View Profile</a>
            </li>
                    <?php else : ?>
            <li>
                <a href="login.php">LOG IN</a>
            </li>
            <li>
                <a href="register-user.php">REGISTER</a>
            </li>
                    <?php endif; ?>
        </ul>
    </nav>
</header>

		<div class="my-slider">
            <ul>
                <li id="slide1"><img src="./assets/img/sliderimages/orangesoap_main.jpg"></li>
                <li id="slide2"><img src="./assets/img/sliderimages/profile_bottles.jpg"></li>
                <li id="slide2"><img src="./assets/img/sliderimages/profile_jars.jpg"></li>
            </ul>
        </div>

	<?php
		if($error != "") {
	    	echo $error."<br/>";
		}
    ?>
    
  <div id="productsTitle">
            <p class="productTitle">Profile</p>
            <p id="productDesc">Login to your profile to customize your wish list, add items to your cart and leave reviews on the products you love. Also be sure to add your email for exclusive VIP offers.</p>
            <hr>
        </div>
  
    <div class="loginWrapper">
        <div class="leftSide">
            <h2>Log In</h2>
                <form action="login.php" method="post">
                    <div class="inputUser" id="username">
                        <label>Username</label><br><input type="text" name="username" value="<?php echo $username; ?>" /><br/>
                    </div>
                    <br>
                    <div class="inputUser" id="password">
                        <label>Password</label><br><input type="password" name="password" value="<?php echo $password; ?>" /><br/>
                    </div><br>
                    <input class="loginBtn" type="submit" value="Login" name="submit-login" />
                    <p>Not a member yet? Register <a href="register-user.php">here</a></p>
                </form>
        </div>
    </div>

<div class="wrapper-footer">
        <div id="footer">
            <div id="footerBanner">
                <img id="antiBanner" src="/assets/img/footer/footerBanner.png" alt="anti-cruelty and ethical banner"> 
            </div> 
            <p id="socialTitle">Join The Conversation</p><br>
            <div id="socialMediaIcons">
                <img src="./assets/img/footer/socialMediaIcons/facebook-logo.png">
                <img src="./assets/img/footer/socialMediaIcons/google-plus-logo.png">
                <img src="./assets/img/footer/socialMediaIcons/instagram-logo.png">
                <img src="./assets/img/footer/socialMediaIcons/twitter-social-logo.png">
                <img src="./assets/img/footer/socialMediaIcons/youtube-logotype.png">
            </div>

        </div>
    </div>
    <br><br><br>
    <div class="clear">
    <div id="copyrightInfo">
        <p id="copyright">2007 Copyright Lush Cosmetics Canada. Content is for educational purposes only.</p>
    </div>


        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="./unslider-master/dist/js/unslider-min.js"></script>
        <script src="./assets/js/main.js"></script>


</body>
</html>

