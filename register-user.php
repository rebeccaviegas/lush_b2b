<?php 

require_once 'includes/global.inc.php';

//initialize php variables used in the form
$username = "";
$password = "";
$password_confirm = "";
$email = "";
$error = "";
$firstname = "";
$lastname = "";
$company = "";

//check to see that the form has been submitted
if(isset($_POST['submit-form'])) { 

	//retrieve the $_POST variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$company = $_POST['company'];

	//initialize variables for form validation
	$success = true;

	//defining the variable which is a new instance or object of our userTools class
	$userTools = new UserTools();
	
	//validate that the form was filled out correctly
	//check to see if user name already exists
	//
	if($userTools->checkExists($username)) {
	    $error .= "That username is already taken.<br/> \n\r";
	    $success = false;
	}

	//check to see if passwords match
	if($password != $password_confirm) {
	    $error .= "Passwords do not match.<br/> \n\r";
	    $success = false;
	}

	//setting the sucess variable to false does not set the user to the database 

	if($success) {
	    //prep the data for saving in a new user object
	    $data['username'] = $username;
	    $data['password'] = md5($password); //encrypt the password for storage
		$data['email'] = $email;
		$data['firstname'] = $firstname;
		$data['lastname'] = $lastname;
		$data['company'] = $company;
		

		//create the new user object
		//creating a new instance of the user CLASS. the data associated is anything with the data from above.
		$newUser = new User($data);
	
		//save the new user to the database
		//saving this new user to the database. It is a new user. 
	    $newUser->save(true);
	
	    //log them in
	    $userTools->login($username, $password);
	
	    //redirect them to the profile page
	    header("Location: profile.php");
	    
	}

}

?>


<html>
<head>
	<title>Create Your Account</title>
	
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


    <?php echo ($error != "") ? $error : ""; ?>
    <div id="productsTitle">
            <p class="productTitle">Create Your Account</p>
           
            <hr>
        
        </div>

    <div class="loginWrapper">
        <div class="rightSide2">
                <?php echo ($error != "") ? $error : ""; ?>
                    <form action="register-user.php" method="post">
                        <div class="inputUser" id="firstname">
                            <label>First Name</label><br><input type="text" name="firstname" value="<?php echo $firstname; ?>" />
                        </div>
                        <br>
                        <div class="inputUser" id="lastname">
                            <label>Last Name</label><br><input type="text" name="lastname" value="<?php echo $lastname; ?>" />
                        </div>
                        <br>
                        <div class="inputUser" id="username">
                            <label>User Name</label><br><input type="text" name="username" value="<?php echo $username; ?>" />
                        </div>
                        <br>
                        <div class="inputUser" id="email">
                            <label>Email</label><br><input type="text" name="email" value="<?php echo $email; ?>" />
                        </div>
                        <br>
                        <div class="inputUser" id="company">
                            <label>Company Name</label><br><input type="text" name="company" value="<?php echo $company; ?>" />
                        </div>
                        <br>
                        <div class="inputUser" id="password">
                            <label>Password</label><br><input type="text" name="password" value="<?php echo $password; ?>" />
                        </div>
                        <br>
                        <div class="inputUser" id="confirmpassword">
                            <label>Confirm Password</label><br><input type="text" name="password_confirm" value="<?php echo $password_confirm; ?>" />
                        </div>
                        <br>
                        
                        <input class="loginBtn" type="submit" value="Register" name="submit-form" />
                    </form>
            </div>
            <div class="myAccountMenu">
                <h3>My Account Services</h3>
                <ul>
                    <li><a href="#">Address Book</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Gift Registry</a></li>
                    <li><a href="#">My Subscriptions</a></li>
                </ul>
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

