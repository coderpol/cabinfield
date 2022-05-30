<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cabinfield | Classic Amish Craftmanship">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title><?php echo (isset($page_title)?$page_title : "Homepage") ?> - Cabinfield</title>
    <!-- including google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"> <!-- including dm sans font -->
    <link rel="stylesheet" href="css/style.css"> <!-- Include the custom css at the last -->
</head>
<body>
<?php include_once('sections/components/topbar.php') ?>

<header class="header-area clearfix">
    <div class="container">
        <div class="row vertically-middle">
            <div class="col-md-4 col-12 logo-area">
                <h1 class="logo-block">
                    <a href="home.php" class="logo">
                        <img class="above-tablet" src="images/logo-large.svg" alt="Cabinfield">
                        <img class="upto-tablet" src="images/logo-white.svg" alt="Cabinfield">
                    </a>
                </h1>
            </div>
            <div class="col-md-5 col-5 search-area">
                <form action="/" class="searchform">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                    <input type="search" name="search" id="search" placeholder="Search our store">
                </form>
            </div>
            
            <div class="col-md-3 col-12 cart-area">
                <ul class="cart-list">
                    <li><a href="#"><span class="above-tablet">Sign In</span><i class="upto-tablet fa-solid fa-user"></i></a></li>
                    <li class="above-tablet"><a href="#">My Wishlist</a></li>
                    <li class="upto-tablet"><a href="tel:+866-450-9663"><i class="fa-solid fa-phone"></i></a></li>
                    <li><a href="shopping-cart.php"><i class="fa-solid fa-cart-shopping"></i> <span class="counter">0</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<?php include_once('sections/components/navigation.php') ?>