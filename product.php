<?php 
$page_title="Product Customized";
include_once('sections/layouts/header.php') 
?>


<?php include_once('sections/header-area.php') ?>

<div class="breadcrum-section">
    <div class="container">
        <div class="row">
            <nav class="col-md-12 breadcrumb-area" aria-label="breadcrumb">
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="bedroom-landing.php">Bedrooms</a></li>
                    <li><a href="#">Shop Style</a></li>
                    <li><a href="collection-landing.php">Shop Collection</a></li>
                    <li><a href="product-listing.php">Product Listing</a></li>
                    <li class="active">Kennet Flat Panel Amish Bed</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="section page-content product-section">
    <div class="container">
        <div class="row">

        </div>
        <div class="border-bottom mb-0"></div>
    </div>
</div>
<div class="section product-slider-section">
    <div class="container">
        <div class="row slider-row">
            <div class="col-md-12 section-sub-title">
                <h4>Similiar Products</h4>
                <a href="#" class="more">See More</a>
            </div>
            <div class="product-slider" id="product-slider-1">
                <?php include("sections/product-slider.php"); ?>
            </div>
        </div>
        <div class="row slider-row">
            <div class="col-md-12 section-sub-title">
                <h4>Other products  in the Kendal Series</h4>
                <a href="#" class="more">See More</a>
            </div>
            <div class="product-slider" id="product-slider-1">
                <?php include("sections/product-slider.php"); ?>
            </div>
        </div>
    </div>
</div>


<?php include_once('sections/layouts/footer.php') ?>