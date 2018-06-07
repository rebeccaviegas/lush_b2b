<?php

require_once 'includes/global.inc.php';

//setup url string var
$url_string = 'item.php?category=' . $_GET['category'] . '&product=' . $_GET['product'];

//grab category from URL parameters
$queried_category = $_GET['category'];
$queried_category = str_replace('_', ' ', $queried_category);
$queried_category = ucwords($queried_category);

//grab product from URL parameters
$queried_product = $_GET['product'];
$queried_product = str_replace('_', ' ', $queried_product);
$queried_product = ucwords($queried_product);

$productTools = new ProductTools();
$product = $productTools->getByName($queried_product);


if(isset($_POST['add-to-cart'])){

    //new instance of cart
    $cart = new Cart();

    $stock = $product->stock;
    $quantity = $_POST['quantity'];

    //add to cart
    $cart->add($product,$quantity);

    //store values in data array
    $data['id'] = $product->id;
    $data['name'] = $product->name;
    $data['price'] = $product->price;
    $data['category'] = $product->category;
    $data['image'] = $product->image;
    $data['stock'] = $stock - $quantity;
    $data['description'] = $product ->description;
    $data['howtouse'] = $product->howtouse;

    //create the new product object
    $updateProduct = new Product($data);

    //save the new product to the database
    $updateProduct->save();

    // header('Location: ' . $url_string);

    header('Location: cart.php');
    
}

?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $product->category . " - " . $product->name; ?></title>

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
                <!-- <h1>Hello, <?php echo $user->username; ?>!</h1> -->
            <li>
                <a href="logout.php">Log Out</a>
            </li>
            <li>
                <a href="profile.php">View Profile</a>
            </li>
                    <?php else : ?>
                <!-- <h1>You are not logged in.</h1> -->
            <li>
                <a href="login.php">LOG IN</a>
            </li>
            <li>
                <a href="register-user.php">REGISTER</a>
            </li>
                    <?php endif; ?>
                <!-- <a href="#">LOG IN</a> -->
        </ul>
    </nav>
</header>

<body>

    <?php if($product->category === "Bath Oils") :?>

    <div class="itemBannerWrapper grid-container">
        <img src="./assets/img/itemBanners/item-banner_bathoils.jpg">
    </div>
    
    <?php elseif($product->category === "Bath Bombs"):?>
    <div class="itemBannerWrapper grid-container">
        <img src="./assets/img/itemBanners/item-banner_bathbombs.jpg">
    </div>

    <?php elseif($product->category === "Lipscrub") :?>
        <div class="itemBannerWrapper grid-container">
            <img src="./assets/img/itemBanners/item-banner_lipscrubs.jpg">
        </div>

    <?php elseif($product->category === "Face Masks") :?>
        <div class="itemBannerWrapper grid-container">
            <img src="./assets/img/itemBanners/item-banner_facemasks.jpg">
        </div>

    <?php elseif($product->category === "Henna Hair Dye") :?>
        <div class="itemBannerWrapper grid-container">
            <img src="./assets/img/itemBanners/item-banner_hennadye.jpg">
        </div>

    <?php elseif($product->category === "Fragrance") :?>
        <div class="itemBannerWrapper grid-container">
            <img src="./assets/img/itemBanners/item-banner_fragrance.jpg">
        </div>



    <?php else :?>
    <?php endif;?>

    <div class="grid-container">
        <div class="grid-item buyItem">

            <p><?php echo $product->category;?> - <?php echo $product->name;?></p>
            <b>Price: $<?php echo $product->price;?></b>
            <br/>
            <img src="<?php echo $product->image;?>" width="240" alt="<?php echo $product->name;?>"/>

            <p>There are currently: <?php echo $product->stock;?> items available. </p>

            <?php if($product->stock > 0) : ?>
            
                <form action="<?php echo $url_string;?>" method="post">
                <div id="quantityNum">
                    <select name="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <br>
                </div>  
                    <input type="submit" class="productBtn" value="Add to Cart" name="add-to-cart"/>
                </form>
            <?php else: ?>
                <b>Oops, Looks like we are out of stock</b>
            <?php endif; ?>


        </div>
    </div>
    <div class="grid-container">
        <div class="grid-item itemDescription" id="descriptionBox">
           <p><?php echo  $product->description; ?> </p>
           <p id="descriptionTitle">How To Use</p>
           <p id="descriptionText"><?php echo  $product->howtouse; ?> </p>
       
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

