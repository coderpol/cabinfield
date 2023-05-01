<?php 
// page title
$page_title="Product Customized - V4";

// inlcude the header 
include_once('sections/layouts/header.php') 
?>

<!-- breadcrumb-section starts  -->
<div class="breadcrum-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="bedroom-landing.php">Bedrooms</a></li>
                    <li><a href="#">Shop Style</a></li>
                    <li><a href="collection-landing.php">Shop Collection</a></li>
                    <li><a href="product-listing.php">Product Listing</a></li>
                    <li class="active">Kennet Flat Panel Amish Bed</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-section ends  -->

<!-- .product-section starts  -->
<div class="section page-content product-section">
    <div class="container">
        <div class="row product-gallery-area">
            <div class="col-lg-6 col-md-12 product-gallery">
                <?php include_once('sections/product-page/gallery-area.php'); ?>
            </div>
            <div class="col-lg-6 col-md-12 product-details">
                <?php include_once('sections/product-page/product-details-4.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <span class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Customize</span>
                    </li>
                    <li class="nav-item" role="presentation">
                        <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Details & Options</span>
                    </li>
                    <li class="nav-item" role="presentation">
                        <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Lead Time</span>
                    </li>
                    <li class="nav-item" role="presentation">
                        <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">Order Stain Sample</span>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1">
                        <form action="#" class="cabinform">
                            <div class="accordion" id="customizations">
                                <!-- First accordion -->
                                <?php include_once('sections/product-page/accordions/bed.php') ?>
                                
                                <!-- second accordion  -->
                                <?php include_once('sections/product-page/accordions/wood.php') ?>
                                
                                <!-- third accordion  -->
                                <?php include_once('sections/product-page/accordions/strain.php') ?>
                                
                                <!-- fourth accordion  -->
                                <?php include_once('sections/product-page/accordions/leaf.php') ?>
                                
                                <!-- fifth accordion  -->
                                <?php include_once('sections/product-page/accordions/coat.php') ?>
                                
                                <!-- sixth accordion  -->
                                <?php include_once('sections/product-page/accordions/fabric.php') ?>

                            </div>
                            <div class="border-bottom mb-4"></div>
                            <?php include_once('sections/product-page/quote-form-area.php') ?>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2">
                        <?php include_once('sections/product-page/tabs/specs.php') ?>
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3">
                        <?php include_once('sections/product-page/tabs/lead-time.php') ?>
                    </div>
                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4">
                        <?php include_once('sections/product-page/tabs/order-stain.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom mb-90"></div>
        <?php include_once('sections/product-page/review-testimonial-section-4.php'); ?>
    </div>
    <?php include_once('sections/modal/edit-zip.php') ?>
</div>



<?php include_once('sections/layouts/footer.php') ?>