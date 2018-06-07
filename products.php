<?php
 
require_once 'includes/global.inc.php';

?>
<!doctype html>
<html>
<head>
    <title>HOMEPAGE</title>

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
        <li id="slide1">
            <img src="./assets/img/sliderimages/products_hands.jpg">
        </li>
        <li id="slide2">
            <img src="./assets/img/sliderimages/products_main.jpg">
        </li>
        <li id="slide3">
            <img src="./assets/img/sliderimages/products_lotion.jpg">
        </li>
    </ul>
</div>
        <div id="productsTitle">
            <p class="productTitle">Products</p>
            <p id="productDesc">When it’s time to develop new products, our inventors don’t only look to ingredient lists for inspiration, but immerse themselves in music, film, literature and art. The result? Unconventional, luxurious cosmetics that blend science and art for entirely new sensorial experiences.</p>
            <hr>
            <br>
            <br>
        </div>
       

        <div class="grid-container wrapperProductsPage">
            <div class="grid-item">
                <div class="productTile1">
                    <a href="products-bath_bombs.php"><img src="./assets/img/productTiles/bathBombProducts copy.jpg" alt="bath bomb product photo"></a>
                    <p class="tileTitle">Bath Bombs</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="productTile2">
                    <a href="products-bath_oils.php"><img src="./assets/img/productTiles/bathOilProduct copy.jpg" alt="bath oil product photo"></a>
                    <p class="tileTitle">Bath Oils</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="productTile2">
                    <a href="products-lipscrubs.php"><img src="./assets/img/productTiles/lipscrub.jpg" alt="lip scrubs product photo"></a>
                    <p class="tileTitle">Lipscrubs</p>
                    </div>
                </div>
            <div class="grid-item">
                <div class="productTile1">
                    <a href="products-henna_hair_dye.php"><img src="./assets/img/productTiles/hairProduct.jpg" alt="bath bomb product photo"></a>
                    <p class="tileTitle">Hair Dye</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="productTile2">
                    <a href="products-face_masks.php"><img src="./assets/img/productTiles/productFaceMask copy.jpg" alt="bath oil product photo"></a>
                    <p class="tileTitle">Face Masks</p>
                </div>
            </div>
            <div class="grid-item">
                <div class="productTile2">
                    <a href="products-fragrance.php"><img src="./assets/img/productTiles/productFragrance copy.jpg" alt="bath oil product photo"></a>
                    <p class="tileTitle">Fragrances</p>
                    </div>
                </div>
            <div class="grid-item"></div>
        </div>

        </div>

        <br><br><br>
       
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
