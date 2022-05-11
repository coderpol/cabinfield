
<?php include_once('sections/components/topbar.php') ?>

<header class="header-area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 logo-area">
                <h1 class="logo-block">
                    <a href="home.php" class="logo">
                        <img class="above-tablet" src="images/logo.svg" alt="Cabinfield">
                        <img class="upto-tablet" src="images/logo-white.svg" alt="Cabinfield">
                    </a>
                    <span class="slogan">Classic Amish Craftmanship</span>
                </h1>
            </div>
            <div class="col-md-5 col-5 search-area">
                <form action="/" class="searchform">
                    <i class="cabincon search-gray size-20"></i>
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