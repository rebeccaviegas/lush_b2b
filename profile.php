<?php 

require_once 'includes/global.inc.php';

//check to see if they're logged in
if(!isset($_SESSION['logged_in'])) {
	header("Location: login.php");
}

//get the user object from the session
//reference the session variable with their user id
$user = unserialize($_SESSION['user']);

//initialize php variables used in the form
$email = $user->email;
$firstname = $user->firstname;
$lastname = $user->lastname;
$company = $user->company;
$message = "";

//check to see that the form has been submitted
if(isset($_POST['submit-settings'])) { 

	//retrieve the $_POST variables
	//setting the user object/field to the new value of the email object. 
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$company = $_POST['company'];

	$user->email = $email;
	$user->firstname = $firstname;
	$user->lastname = $lastname;
	$user->company = $company;

	$user->save();
	//referencing the save

	$message = "Settings Saved<br/>";
	//telling the user that the settings have been saved. 
}


?>

<!doctype html>
<html>
<head>
    <title>Your Profile</title>
    <link rel="stylesheet" href="./unslider-master/dist/css/unslider.css">
    <link rel="stylesheet" href="./unslider-master/dist/css/unslider-dots.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
<header>
<header>
    <a href="index.php"><img id="logo" src="./assets/img/homepageimages/Lush_logo_black.png" alt="LUSH logo"/></a>
    <nav id="mainNav">
    <ul>
        <li>
            <a href="cart.php">Cart</a>
        </li>
        <li>
            <a href="products.php">Products</a>
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
            <a href="login.php">Log In</a>
        </li>
        <li>
            <a href="register-user.php">Register</a>
        </li>
                <?php endif; ?>
    </ul>
</nav>
</header>

    
    <div class="loginWrapper">
        <div class="leftSide">
        <h2>Edit Your Profile</h2>

            <form action="profile.php" method="post">
                
                <?php echo $message; ?>
                    <div class="inputUser" id="firstname">
                        <label>First Name</label><br><input type="text" name="firstname" value="<?php echo $firstname; ?>" />
                    </div>
                    <br>
                    <div class="inputUser" id="lastname">
                        <label>Last Name</label><br><input type="text" name="lastname" value="<?php echo $lastname; ?>" />
                    </div>
                    <br>
                    <div class="inputUser" id="email">
                        <label>Email</label><br><input type="text" name="email" value="<?php echo $email; ?>" />
                    </div>
                    <br>
                    <div class="inputUser" id="company">
                        <label>Company</label><br><input type="text" name="company" value="<?php echo $company; ?>" />
                    </div>
                    <br>
                <input type="submit" class="productBtnUpdate" value="Update" name="submit-settings" />
                
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

