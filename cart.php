<?php

require_once 'includes/global.inc.php';

$cart = new Cart();
if(isset($_POST['empty-cart'])) {

    $cart->emptyCart();

}

//  //store values in data array
//  $data['id'] = $product->id;
//  $data['name'] = $product->name;
//  $data['price'] = $product->price;
//  $data['category'] = $product->category;
//  $data['image'] = $product->image;
//  $data['stock'] = $stock - $quantity;

?>


<!doctype html>
<html>
<head>
    <title>Lush - Checkout</title>

    <link rel="stylesheet" href="./unslider-master/dist/css/unslider.css">
    <link rel="stylesheet" href="./unslider-master/dist/css/unslider-dots.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
<header>
    <img id="logo" src="./assets/img/homepageimages/Lush_logo_black.png" alt="LUSH logo"/>

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

    <body>
        <br>

    <div class="grid-container wrapperProductsPage">
       
        <?php if(isset($_SESSION['cart']) && $_SESSION['cart'] > 0) :

        foreach($_SESSION['cart'] as $item) :?>
            <div class="grid-item cartItem">
                <img src=" <?php echo $item['product']->image;?>" width="150" alt="<?php echo $product->name;?>"/>
                <?php $name = $item['product']->name;
                $quantity = $item['quantity']; ?>
                <?php echo $name . " - " . $item['product']->category ?><br><br>
                Quantity: <?php echo $quantity . " - Total: $" . $item['product']->price * $quantity;?>
            </div>


                
            <?php endforeach; else:?>
            <div class="grid-container wrapperProductsPage">
                <p class="sectionTitle">Your cart is empty.</p>
                <?php endif; ?>
            </div>
    </div>    
<br><br>
        <?php if($_SESSION['cart'] > 0) : ?>

        <div class="grid-container buttonsforCheckout">
            <form action="cart.php" method="post" id="cartForm">
                <div class="grid-container cartBtns">
                    <div class="grid-item">
                        <input type="submit" class="cartBtn" name="empty-cart" value="Empty Cart"/>
                    </div>
                </div>
            </form>
        </div>

         <?php else: ?>
            <div class="grid-container cartBtns">
                <div class="grid-item">
                    <a href="products.php"><input type="submit" class="cartBtn" value="Keep Shopping"/></a>
                </div>
            </div>
        <?php endif; ?>

<br>
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

