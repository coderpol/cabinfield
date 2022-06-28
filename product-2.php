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
                        <div class="border-bottom mb-5"></div>
                        <div class="quote-form-area">
                            <div class="section-sub-title mb-4">
                                <h4>For a Shipping Quote please enter below:</h4>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-6 col-12">
                                    <label for="zip" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zip" aria-label="Zip Code" required>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-5 col-12">
                                    <div class="form-check right-side">
                                        <input class="form-check-input" type="checkbox" name="com-address" id="com-address" value="yes">
                                        <label class="form-check-label black" for="com-address">Please check for delivery to a commercial addres</label>
                                    </div>
                                    <div class="form-check right-side">
                                        <input class="form-check-input" type="checkbox" name="forklift" id="forklift" value="yes">
                                        <label class="form-check-label black" for="forklift">Please check if you have a forklift available to unload</label>
                                    </div>
                                    <div class="form-check right-side">
                                        <input class="form-check-input" type="checkbox" name="assembly" id="assembly" value="yes">
                                        <label class="form-check-label black" for="assembly">Please check for quote for assembling your gazebo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-6 col-12">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstname" aria-label="First Name" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" aria-label="Last Name" required>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-6 col-12">
                                    <label for="phone" class="form-label">Phone Number <span>(optional)</span></label>
                                    <input type="text" class="form-control" id="phone" aria-label="Phone Number" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" aria-label="Email" required>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-12">
                                    <label for="comments" class="form-label">Comments</label>
                                    <textarea class="form-control" name="comments" id="comments" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="submit-button">
                                <button type="submit" class="btn btn-primary btn-large">Request Quote</button>
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