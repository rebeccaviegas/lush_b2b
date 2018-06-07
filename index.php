<?php
 
require_once 'includes/global.inc.php';

?>

<!doctype html>
<html>
<head>
    <title>Lush</title>

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

        <div class="my-slider">
            <ul>
                <li id="slide1">
                    <img src="./assets/img/sliderimages/greenriver_main.jpg">
                </li>

                <li id="slide2">
                    <img src="./assets/img/sliderimages/gift_main.jpg">
                </li>
                <li id="slide3">
                    <img src="./assets/img/sliderimages/pink_main.jpg">
                </li>
            </ul>
        </div>


        <div id="mainTitle">
            <p>Featured Products</p>
        </div>
       
        <hr>

        <div class="mainWrapper">
            <div id="scrubPhoto">
                <img id="lipScrub" src="./assets/img/homepageimages/3scrubs.jpg" alt="lip scrub photo">
            </div>
            <div id="scrubDesc">
                <h2>Pucker Up, Buttercup!</h2>
                <p>We like to keep our lips perfectly soft at all times; you never know when you might need to pucker up. Keep your kisser ready and protected from the elements with our selection of delectable, rich lip balms and tints, and sweet lip scrubs.</p>
            </div>
        </div>

        <div class="mainWrapper2">
            <div class="secondRow">
                <h2>Trans Rights</h2>
                <p>Transgender and non-binary people are our neighbors, our friends, our coworkers and our classmates.
                With millions of adults throughout the world identifying as transgender or non-binary, there’s a good chance that you’ve met a transgender person and don’t even know it. The term transgender describes people whose gender identity is different than the sex they were assigned at birth. They’re no less deserving of rights and freedoms than any other person, however, transgender people face disproportionately higher rates of human rights discrimination than any other community.</p>
                <input id="transBtn" type="button" href="#" value="READ ARTICLE">
            </div>
            <div class="secondRow2">
                <img src="./assets/img/homepageimages/transHeart.jpg" width="408px" height="250px">
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
