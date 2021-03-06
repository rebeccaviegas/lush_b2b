<?php
    require_once 'includes/global.inc.php';

    $category = "Fragrance";
    $productTools = new ProductTools();
    $product = $productTools->getByCategory($category);

    ?>

<!doctype html>
<html>
<head>
    <title><?php echo $category?></title>

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
                <li id="slide1"><img src="./assets/img/sliderimages/fragranceall.jpg"></li>
                <li id="slide2"><img src="./assets/img/sliderimages/fragrancelongname.jpg"></li>
                <li id="slide2"><img src="./assets/img/sliderimages/fragrancelust.jpg"></li>
            </ul>
        </div>


       <div id="productsTitle">
            <p class="productTitle">Fragrance</p>
            <p id="productDesc">Inspired by art, poetry and culture, these fine fragrances are blended using the world’s best essential oils and absolutes. Our core range perfumes, which feature white labels, are available online now and will be in every shop soon. And our exclusive collection of extended range perfumes, which feature black labels, are only available online and in a handful of select shops.</p>
            <hr>
            <br>
            <br>
        </div>
  
            <div class="grid-container wrapperProductsPage">
              
                    <?php foreach($product as $item) : 
                    
                        $slug = strtolower($item->name);
                        $slug = str_replace(' ','_',$slug); ?>
                    <div class="grid-item">
                        <a href="item.php?category=fragrance&product=<?php echo $slug;?>">
           
                            <img class="prodImg" src="<?php echo $item->image;?>" width="250" alt="<?php echo $item->name;?>"/>
                        </a>
                        <br>
                        <p class="productTitle"><?php echo $item->name;?></p>
                        <p class="productType"><?php echo $item->category;?></p>
                        <p class="productPrice">$<?php echo $item->price;?></p>

                        <a href="item.php?category=fragrance&product=<?php echo $slug;?>">
                            <input type="submit" class="productBtn" value="Buy Now" name="add-to-cart"/>
                        </a>
                
                    </div>
                
                    <?php endforeach; ?>

        </div>

        </div>

        <br><br>
       
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