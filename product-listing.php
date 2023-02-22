<?php 
$page_title="Product Lisitng - V1"; // dynamic page title for every page

// include header
include_once('sections/layouts/header.php') 
?>

<!--highlighted area starts  -->
<div class="section page-content orange-gradient page-highlight-area">
    <div class="container">
        <div class="row">
            <!-- breadcrumb starts  -->
            <div class="col-md-12 breadcrumb-area">
                <!-- use class "dark" as the color of the breadcrumb is dark  -->
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="bedroom-landing.php">Bedroom</a></li>
                    <li><a href="style-landing.php">Shop Style</a></li>
                    <li><a href="collection-landing.php">Shop Collection</a></li>
                    <li class="active">Product Listing</li>
                </ol>
            </div>
            <!-- breadcrumb ends  -->
            
            <!-- Highlighted text starts  -->
            <div class="col-md-12 highlight-text">
                <h2 class="highlight-title">Timelessly trendy, our contemporary Amish dining chairs combine heirloom quality craftsmanship with modern chair designs.</h2>
                <p>Customize your Amish dining room set with hardwood selections, seat styles and attractive upgrade options. Our extensive collection includes upholstered dining chairs, ladder back chairs, Parson’s chairs, Amish bar stools and more. Heirloom quality Amish dining room furniture with contemporary allure.</p>
            </div>
            <!-- Highlighted text ends  -->
        </div>
    </div>
</div>
<!-- highlight area ends  -->

<!-- product listing area starts  -->
<div class="section page-content product-listing-section">
    <div class="container">
        <!-- The top functional area with buttons -->
        <div class="row mb-2 functional-area no-button">
            <div class="col-md-3 section-title small">
                <h1><span>Outdoor</span> Lounge & Dining Furniture Sets</h1>
            </div>
            <?php 
                include_once('sections/product-listing-shorting-area.php');
            ?>
            
        </div>
        <!-- The top functional area with buttons ends -->
        
        <div class="row">
            <!-- filter area  -->
            <?php 
                include_once('sections/product-listing-filters.php');
            ?>
            <!-- filter area ends -->
            
            <!-- main product listing area  -->
            <div class="col-lg-9 col-md-12 main-content product-listing-area" id="product-listing-area">
                <div class="row listed-product">
                    <div class="col-md-12 filter-info">
                        <p>Showing 25 of 64 items</p>
                    </div>
                    <?php 
                        for($i=1;$i<=3;$i++){
                    ?>
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <figure>
                            <a href="#">
                                <img src="images/products/listing/product-1.png" alt="">
                            </a>
                        </figure>
                        <h3 class="title"><a href="product-1.php">Franklin Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <button><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <figure>
                            <a href="#">
                                <img src="images/products/listing/product-2.png" alt="">
                            </a>
                        </figure>
                        <h3 class="title"><a href="product-1.php">Charleston Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <button><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <figure>
                            <a href="#">
                                <img src="images/products/listing/product-3.png" alt="">
                            </a>
                        </figure>
                        <h3 class="title"><a href="product-1.php">Prairie Mission Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <span class="availability">Available for 3 sizes</span>
                        <div class="icon">
                            <button><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <figure>
                            <a href="#">
                                <img src="images/products/listing/product-4.png" alt="">
                            </a>
                        </figure>
                        <h3 class="title"><a href="product-1.php">Franklin Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <button><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <figure>
                            <a href="#">
                                <img src="images/products/listing/product-5.png" alt="">
                            </a>
                        </figure>
                        <h3 class="title"><a href="product-1.php">Franklin Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <button><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <figure>
                            <a href="#">
                                <img src="images/products/listing/product-6.png" alt="">
                            </a>
                        </figure>
                        <h3 class="title"><a href="product-1.php">Franklin Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <button><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
                <div class="text-center mt-5 col-12 col-md-3 mx-auto">
                    <a href="#" class="btn btn-empty btn-block">Shop All 64 file cabinets</a>
                </div>
                
                <!-- pagination area  -->
                <!-- <div class="row text-center pagination-area">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="list-of-pre-built-products-v1.php" aria-label="Previous"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="list-of-pre-built-products-v1.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="list-of-pre-built-products-v1.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="list-of-pre-built-products-v1.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="list-of-pre-built-products-v1.php" aria-label="Next"><i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                </div> -->
                <!-- pagination area ends -->
            </div>
        </div>
    </div>
</div>

<!-- include footer area  -->
<?php include_once('sections/layouts/footer.php') ?>