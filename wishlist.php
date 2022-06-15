<?php 
// dynamic page title
$page_title="Wishlist";

// include header
include_once('sections/layouts/header.php') 
?>

<!-- breadcrumb section starts  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <!-- class dark for darker text and reverse for back direction  -->
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="thank-you.php">Wishlist</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends  -->

<!-- confirmatin text area starts  -->
<div class="section clearfix wishlist-section">
    <div class="container">
        <div class="row page-headline">
            <div class="col-md-12 col-12 section-title medium">
                <h2>Wishlist</h2>
            </div>
        </div>
        <div class="wishlist-area">
            <div class="row wishlist-item">
                <figure class="col-md-4 figure">
                    <img src="images/products/wishlist/product-1.png" alt="">
                </figure>
                <div class="col-md-5 item-details">
                    <h4>Carolina Crown Amish Bed</h4>
                    <p class="price">Starting at: <span>$1,371.00</span></p>
                </div>
                <div class="col-md-3 action">
                    <div class="buttons">
                        <button class="btn btn-primary btn-block">Move to Cart</button>
                        <button class="btn btn-empty btn-block wishlist-item-remover">Remove</button>
                    </div>
                </div>
            </div>
            
            <div class="row wishlist-item">
                <figure class="col-md-4 figure">
                    <img src="images/products/wishlist/product-1.png" alt="">
                </figure>
                <div class="col-md-5 item-details">
                    <h4>Carolina Crown Amish Bed</h4>
                    <p class="price">Starting at: <span>$1,371.00</span></p>
                </div>
                <div class="col-md-3 action">
                    <div class="buttons">
                        <button class="btn btn-primary btn-block">Move to Cart</button>
                        <button class="btn btn-empty btn-block wishlist-item-remover">Remove</button>
                    </div>
                </div>
            </div>
            
            <div class="row wishlist-item">
                <figure class="col-md-4 figure">
                    <img src="images/products/wishlist/product-1.png" alt="">
                </figure>
                <div class="col-md-5 item-details">
                    <h4>Carolina Crown Amish Bed</h4>
                    <p class="price">Starting at: <span>$1,371.00</span></p>
                </div>
                <div class="col-md-3 action">
                    <div class="buttons">
                        <button class="btn btn-primary btn-block">Move to Cart</button>
                        <button class="btn btn-empty btn-block wishlist-item-remover">Remove</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- confirmation text area ends  -->

<!-- include the footer area  -->
<?php include_once('sections/layouts/footer.php') ?>