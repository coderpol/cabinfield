<?php 
// page title
$page_title="Product Customized";

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
                <?php include_once('sections/product-page/product-details.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <span class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Customize</span>
                    </li>
                    <li class="nav-item" role="presentation">
                        <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Specs & Features</span>
                    </li>
                    <li class="nav-item" role="presentation">
                        <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Reviews & Testimonials</span>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <form action="#" class="cabinform tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="Customize">
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
                        <div class="border-bottom mb-0"></div>
                        <div class="order-details">
                            <h4>
                                Shipping prices calculated for zip code: 
                                <span class="blue">10001</span> 
                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            </h4>
                            
                            
                            <div class="modal fade" id="edit_zip" tabindex="-1" aria-labelledby="edit_zip" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Zip Code</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="row form-line">
                                            <div class="col-12">
                                                <label for="" class="form-label">Zip Code</label>
                                                <input type="number" class="form-control" placeholder="Enter your zip code" value="10001" aria-label="Zip Code">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <h4>Shipping Type:</h4>
                            <div class="col-md-4 option-area">
                                <div class="shipping-option">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="shipping-type" id="shipping-1" value="shipping-1" checked>
                                        <label class="form-check-label" for="shipping-1">
                                        Standard curbside delivery <span class="value">+$30.40</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="shipping-type" id="shipping-2" value="shipping-2">
                                        <label class="form-check-label" for="shipping-2">
                                            Inside delivery <span class="value">+$250.21</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="assembly" id="assembly" value="on-site">
                                    <label class="form-check-label black" for="assembly">
                                    On-site assembly <span class="value">+$800.00</span>
                                    </label>
                                </div>
                            </div>
                            <h4>Combined value shipping: <span class="blue">Yes</span></h4>
                            <p><a href="#">More Info About Your Savings</a></p>
                            <p class="value">$1,371.00</p>
                            <p class="note">
                                <span>+$30.40</span> Standard curbside delivery to 10001<br/>
                                <span>+$250.21</span>  On-site assembly
                            </p>
                            <div class="submit-button">
                                <button type="submit" class="btn btn-primary btn-large">Add to Cart</button>
                            </div>              
                        </div>
                    </form>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="Specs & Features">
                        <?php include_once('sections/product-page/tabs/specs.php') ?>
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="Reviews & Testimonials">
                        <?php include_once('sections/product-page/tabs/review.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom mb-0"></div>
    </div>
</div>

<?php include_once('sections/product-page/sliders-area.php') ?>


<?php include_once('sections/layouts/footer.php') ?>