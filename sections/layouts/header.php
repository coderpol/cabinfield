<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=0, maximum-scale=1"> -->
    <!-- <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0"> -->
    <meta name="description" content="Cabinfield | Classic Amish Craftmanship">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title><?php echo (isset($page_title)?$page_title : "Homepage") ?> - Cabinfield</title>
    <!-- including google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"> <!-- including dm sans font -->
    <link rel="stylesheet" href="css/style.css"> <!-- Include the custom css at the last -->
    <link rel="stylesheet" href="css/flexslider.css">
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
        <div class="rg-image-wrapper">
            {{if itemsCount > 1}}
                <div class="rg-image-nav">
                    <a href="#" class="rg-image-nav-prev"><i class="fa-solid fa-chevron-left"></i></a>
                    <a href="#" class="rg-image-nav-next"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            {{/if}}
            <div class="rg-image"></div>
            <div class="rg-loading"></div>
            <div class="rg-caption-wrapper">
                <div class="rg-caption" style="display:none;">
                    <p></p>
                </div>
            </div>
            <div class="button-area">
                <a href="#" class="icon shadow"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </div>
    </script>
</head>
<body>
<?php include_once('sections/components/topbar.php') ?>

<header class="header-area clearfix">
    <div class="container">
        <div class="row vertically-middle">
            <div class="col-md-4 col-12 logo-area">
                <div class="logo-block">
                    <a href="home.php" class="logo">
                        <img class="above-tablet" src="images/logo-large.svg" alt="Cabinfield">
                        <img class="upto-tablet" src="images/logo-white.svg" alt="Cabinfield">
                    </a>
                </div>
            </div>
            
            <div class="col-md-5 col-5 search-area">
                <form action="/search" class="searchform">
                    <input type="search" name="search" id="search" placeholder="Search our store">
                    <button type="submit" class="search_submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            
            <div class="col-md-3 col-12 cart-area">
                <ul class="cart-list">
                    <li><a href="login.php"><span class="above-pc">Sign In</span><i class="upto-pc fa-solid fa-user"></i></a></li>
                    <li class="above-pc"><a href="wishlist.php">My Wishlist</a></li>
                    <li class="upto-pc"><a href="tel:+866-450-9663"><i class="fa-solid fa-phone"></i></a></li>
                    <li><a href="shopping-cart.php"><i class="fa-solid fa-cart-shopping"></i> <span class="counter">0</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


<?php include_once('sections/components/navigation.php') ?>

<?php
$promo_banner = isset($promo_banner) ? $promo_banner : "brand";
if($promo_banner=="blue"){
    $class = "memorial-blue";
    include_once('sections/promotion/memorial-day-promotion-2.php');
}else{
    $class = "memorial-brand";
    include_once('sections/promotion/memorial-day-promotion.php');
}
 ?>