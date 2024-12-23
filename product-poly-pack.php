<?php 
// page title
$page_title="Poly Upon Request";

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
                    <li><a href="#">Fine F</a></li>
                    <li><a href="#">Living Room</a></li>
                    <li><a href="#">Shop By Furniture Type</a></li>
                    <li><a href="#">Sofas, Recliners & Rockers</a></li>
                    <li><a href="#">Rocking Chairs</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-section ends  -->

<!-- .product-section starts  -->
<div class="section page-content product-section has-note">
    <div class="container">
        <div class="row product-gallery-area">
            <div class="col-lg-6 col-md-12 product-gallery">
                <?php 
                $gallery_caption = "Shown in quartersawn white oak with Asbury stain<br>and optional leather upholstery <br> Please see Details for dimensions.";
                include_once('sections/product-page/poly-pack/gallery-area.php'); 
                ?>
            </div>
            <div class="col-lg-6 col-md-12 product-details">
                <?php include_once('sections/product-page/poly-pack/product-details.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <span class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Customize & Order</span>
                    </li>
                    <li class="nav-item" role="presentation">
                        <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Details</span>
                    </li>
                    <li class="nav-item" role="presentation">
                        <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Important Shipping Info</span>
                    </li>
                    <li class="nav-item" role="presentation">
                        <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-4" role="tab" aria-controls="pills-3" aria-selected="false">Reviews & Questiions</span>
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
                            <div class="border-bottom"></div>
                            <div class="order-details">
                                <h4>
                                    Enter your zip code to calculate shipping charges 
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                </h4>
                                
                                <p class="value">$977.00</p>

                                <div class="submit-button">
                                    <button type="submit" class="btn btn-primary btn-large">Add to Cart</button>
                                </div>              
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2">
                        <?php include_once('sections/product-page/tabs/lead-time.php') ?>
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3">
                        <?php include_once('sections/product-page/tabs/specs.php') ?>
                    </div>
                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-3">
                        <?php include_once('sections/product-page/tabs/review.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom mb-0"></div>
    </div>
    <?php include_once('sections/modal/edit-zip.php') ?>
</div>

<div class="section product-slider-section">
    <div class="container">
        <div class="row slider-row">
            <div class="col-md-12 section-sub-title">
                <h4>Related items</h4>
            </div>
            <div class="product-slider" id="product-slider-1">
                <div class="slide product">
                    <figure class="figure">
                        <a href="#">
                            <img src="images/products/slider/chair-1.png" alt="">
                        </a>
                    </figure>
                    <h3 class="title"><a href="product-1.php">Haviland Amish Rocking Chair</a></h3>
                    <p class="details">Product No. FGFH1128</p>
                    <p class="price vertical-middle">starting <span class="value">$881.00</span></p>
                    <div class="icon">
                        <button><i class="fa-solid fa-heart"></i></button>
                    </div>
                </div>
                <div class="slide product">
                    <figure class="figure">
                        <a href="#">
                            <img src="images/products/slider/chair-2.png" alt="">
                        </a>
                    </figure>
                    <h3 class="title"><a href="product-1.php">Grandma's Rocker</a></h3>
                    <p class="details">Product No. FGFH1128</p>
                    <p class="price vertical-middle">starting <span class="value">$977.00</span></p>
                    <div class="icon">
                        <button><i class="fa-solid fa-heart"></i></button>
                    </div>
                </div>
                <div class="slide product">
                    <figure class="figure">
                        <a href="#">
                            <img src="images/products/slider/chair-3.png" alt="">
                        </a>
                    </figure>
                    <h3 class="title"><a href="product-1.php">Elington Amish Rocking Chari</a></h3>
                    <p class="details">Product No. FGFH1128</p>
                    <p class="price vertical-middle">starting <span class="value">$1,101.00</span></p>
                    <div class="icon">
                        <button><i class="fa-solid fa-heart"></i></button>
                    </div>
                </div>
                <div class="slide product">
                    <figure class="figure">
                        <a href="#">
                            <img src="images/products/slider/chair-4.png" alt="">
                        </a>
                    </figure>
                    <h3 class="title"><a href="product-1.php">MacArthur Amish Rocking</a></h3>
                    <p class="details">Product No. FGFH1128</p>
                    <p class="price vertical-middle">starting <span class="value">$959.00</span></p>
                    <div class="icon">
                        <button><i class="fa-solid fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('sections/layouts/footer.php') ?>