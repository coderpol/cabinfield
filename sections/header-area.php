
<?php include_once('sections/components/topbar.php') ?>

<header class="header-area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 logo-area">
                <h1>
                    <a href="home.php">
                        <img src="images/logo.png" alt=""> Cabinfield | Classic Amish Craftmanship
                    </a>
                </h1>
            </div>
            <div class="col-md-5 col-5 search-area">
                <form action="/" class="searchform">
                    <i class="cabincon search-gray size-20"></i>
                    <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                    <input type="search" name="search" id="search" placeholder="Search Furniture">
                </form>
            </div>
            
            <div class="col-md-3 col-12 cart-area">
                <ul class="cart-list">
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> <span class="counter">0</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<?php include_once('sections/components/navigation.php') ?>