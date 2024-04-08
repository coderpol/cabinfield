<?php 
$page_title="Product Lisitng - V4"; // dynamic page title for every page

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
                    <li><a href="collection-landing.php">Shop by Furniture Type</a></li>
                    <li><a href="collection-landing.php">Beds & Headboards</a></li>
                    <li class="active">Sleigh Beds</li>
                </ol>
            </div>
            <!-- breadcrumb ends  -->
            
            <!-- Highlighted text starts  -->
            <div class="col-md-12 highlight-text">
                
                <p>Anchor your bedroom décor in romantic style with an Amish sleigh bed, distinguished by its curved headboard. From classic to contemporary and beyond, these wooden sleigh beds charm.</p>
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
                <h1><span>Sleigh</span> Beds</h1>
                <h2 class="sub-title">Underbed Storage Options Available</h2>
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                <ul class="filter-buttons">
                    <li class="filter"><span id="filter-toggle" class="btn btn-white shadow"><i class="fa-solid fa-sliders rotate-90"></i> <span>Show</span> Filter</span></li>
                    <li class="clearfix sort-by">
                        <span class="float-start above-tablet">Sort By:</span>
                        <form action="#" class="float-end cabinform">
                            <select class="form-select form-select-sm btn btn-white shadow" aria-label=".form-select-sm example">
                                <option selected>High to Low</option>
                                <option value="1">Low to hight</option>
                            </select>
                        </form>
                    </li>
                    <!-- this one will be automatically hidden if you add .no-button to the parend div  -->
                    <li class="shop-by"><a href="bedroom-landing.php" class="btn btn-primary btn">Shop by Furniture Piece</a></li>
                </ul>
            </div>
            
        </div>
        <!-- The top functional area with buttons ends -->
        
        <div class="row bottom-divider">
            <!-- filter area  -->
            <?php 
                $visibility = "0"; // to hide the left pannel by default
                include_once('sections/product-listing-filters.php');
            ?>
            <!-- filter area ends -->
            
            <!-- main product listing area  -->
            <div class="col-md-9 main-content product-listing-area <?php if($visibility==0){echo "col-md-12";} ?>" id="product-listing-area">
                <div class="row listed-product">
                    <!-- <div class="col-md-12 filter-info">
                        <p>Showing 25 of 64 items</p>
                    </div> -->
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
                        <p class="price vertical-middle">Starting <span class="value">$1,3,71.00</span></p>
                        <div class="rating-block mt-2">
                            <div class="rating">
                                <div class="rating-value" style="width:92%"></div>
                            </div>
                        </div>
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
                        <p class="price vertical-middle">Starting <span class="value">$1,3,71.00</span></p>
                        <div class="rating-block mt-2">
                            <div class="rating">
                                <div class="rating-value" style="width:92%"></div>
                            </div>
                        </div>
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
                        <p class="price vertical-middle">Starting <span class="value">$1,3,71.00</span></p>
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
                        <p class="price vertical-middle">Starting <span class="value">$1,3,71.00</span></p>
                        <div class="rating-block mt-2">
                            <div class="rating">
                                <div class="rating-value" style="width:92%"></div>
                            </div>
                        </div>
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
                        <p class="price vertical-middle">Starting <span class="value">$1,3,71.00</span></p>
                        <div class="rating-block mt-2">
                            <div class="rating">
                                <div class="rating-value" style="width:92%"></div>
                            </div>
                        </div>
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
                        <p class="price vertical-middle">Starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <button><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
                <div class="load-more col-12 col-md-3 mx-auto text-center">
                    <p>18 out of 84 items displayed</p>
                    <a href="#" class="btn btn-empty btn-block btn-large">Load More</a>
                </div>
            
            </div>
        </div>
        
        <div class="row">
            <?php include_once('sections/listing-page-bottom-text.php'); ?>
        </div>
    </div>
</div>

<!-- include footer area  -->
<?php include_once('sections/layouts/footer.php') ?>