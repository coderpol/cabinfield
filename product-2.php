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
            <?php 
                include_once('sections/product-gallery-slider-new.php');
            ?>
            <div class="col-lg-6 col-md-12 product-details">
                <div class="section-title small">
                    <h1>Kennet Flat Pannel Amish Bed</h1>
                </div>
                <p>Product No. FGFH1128</p>
                <ul class="seals">
                    <li><img src="images/seals/seal-1.png" alt=""></li>
                    <li><img src="images/seals/seal-2.png" alt=""></li>
                    <li><img src="images/seals/seal-3.png" alt=""></li>
                </ul>
                <p class="pricing">
                    <span>Starting at</span>
                    <span class="price">$1,371.00</span>
                </p>
                <p class="addons"><span>+ $30.40</span> Standard curbside delivery to 10001 <a href="#" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-pen-to-square"></i> Edit</a></p>
                
                <div class="rating-block">
                    <div class="rating">
                        <div class="rating-value" style="width:85%"></div>
                    </div>
                </div>
                <div class="button-area">
                    <butotn class="btn btn-primary btn-large">Select Your Purchase</butotn>
                    <button class="btn btn-icon btn-empty rounded-circle"><i class="fa-solid fa-heart"></i></button>
                </div>
                <h3>Product Information:</h3>
                <p>With a handcrafted wood kitchen set mealtimes will become the special bonding time you’ve always dreamed of. Solidly constructed fan back chairs are optionally stained in 2 tones.</p>
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
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bed Size:  <a href="#" class="blue">Full Bed</a> <a href="#"><i class="fa-solid fa-circle-question"></i></a></span>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="bed-size" class="btn-check" id="bed-1" autocomplete="off">
                                            <label class="btn" for="bed-1">Twin Bed <span>- $102</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="bed-size" checked class="btn-check" id="bed-2" autocomplete="off">
                                            <label class="btn" for="bed-2">Full Bed</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="bed-size" class="btn-check" id="bed-3" autocomplete="off">
                                            <label class="btn" for="bed-3">Queen Bed <span>+ $156</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="bed-size" class="btn-check" id="bed-4" autocomplete="off">
                                            <label class="btn" for="bed-4">King Bed <span>+ $195</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="bed-size" class="btn-check" id="bed-5" autocomplete="off">
                                            <label class="btn" for="bed-5">California King Bed <span>+ $562</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- second accordion  -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Wood type:  <a href="#" class="blue">Brown Maple</a> <a href="#"><i class="fa-solid fa-circle-question"></i></a></span>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="wood-type" class="btn-check" id="wood-1" autocomplete="off">
                                            <label class="btn" for="wood-1">Oak <span>- $102</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="wood-type" checked class="btn-check" id="wood-2" autocomplete="off">
                                            <label class="btn" for="wood-2">Brown Maple</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="wood-type" class="btn-check" id="wood-3" autocomplete="off">
                                            <label class="btn" for="wood-3">Sap Cherry <span>+ $102</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- third accordion  -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Stain:  <a href="#" class="blue"><i class="fa-solid fa-circle-question"></i></a></span>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="alert" role="alert">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <p>Please note that the stain or paint colors shown may not appear the same on all computer monitors. Actual results on your furniture may also vary due to natural variations in the color, grain, and texture of the wood. Please click here to request samples.</p>
                                        </div>
                                        <div class="stack-area">
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-1" autocomplete="off">
                                                <label class="btn" for="stain-1">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-1.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-1.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-2" autocomplete="off">
                                                <label class="btn" for="stain-2">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-2.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-2.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-3" autocomplete="off">
                                                <label class="btn" for="stain-3">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-2.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-3.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-4" autocomplete="off">
                                                <label class="btn" for="stain-4">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-1.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-1.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-5" autocomplete="off">
                                                <label class="btn" for="stain-5" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-2.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                    <figure class="figure">
                                                        <img src="images/stain/stain-2.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-6" autocomplete="off">
                                                <label class="btn" for="stain-6">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-3.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-3.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-7" autocomplete="off">
                                                <label class="btn" for="stain-7">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-1.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-1.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-8" autocomplete="off">
                                                <label class="btn" for="stain-8">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-1.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-1.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-9" autocomplete="off">
                                                <label class="btn" for="stain-9">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-2.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-2.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-10" autocomplete="off">
                                                <label class="btn" for="stain-10">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-3.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-3.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-11" autocomplete="off">
                                                <label class="btn" for="stain-11">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-1.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-1.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-12" autocomplete="off">
                                                <label class="btn" for="stain-12">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-2.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-2.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-13" autocomplete="off">
                                                <label class="btn" for="stain-13">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-3.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-3.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-14" autocomplete="off">
                                                <label class="btn" for="stain-14">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/stain/stain-1.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/stain/stain-1.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-70 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span>Medium OCS-110 </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- fourth accordion  -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Leaf Option:  <a href="#" class="blue">Solid Top (Standard)</a> <a href="#"><i class="fa-solid fa-circle-question"></i></a></span>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="alert" role="alert">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <p>Please note that the stain or paint colors shown may not appear the same on all computer monitors. Actual results on your furniture may also vary due to natural variations in the color, grain, and texture of the wood. Please click here to request samples.</p>
                                        </div>
                                        <div class="stack-area show-checkbox">
                                            <div class="stack">
                                                <input type="checkbox" name="leaf-type" class="form-check-input" checked id="leaf-1" autocomplete="off">
                                                <label class="btn form-check-label" for="leaf-1">
                                                    <div class="text">
                                                        <p><span>Solid Top</span> <strong>Standard</strong></p>
                                                    </div>
                                                    <span class="label">Solid Top</span>
                                                </label>
                                                <div class="counter">
                                                    <span class="btn" data-action="decrease">-</span>
                                                    <input type="number" class="count" value="1"> 
                                                    <span class="btn" data-action="increase">+</span>
                                                </div>
                                            </div>
                                            <div class="stack">
                                                <input type="checkbox" name="leaf-type" class="form-check-input" id="leaf-2" autocomplete="off">
                                                <label class="btn form-check-label" for="leaf-2">
                                                    <figure class="figure">
                                                        <img src="images/leaf/leaf-2.png" alt="">
                                                    </figure>
                                                    <span class="label">Regular 12 Leaf</span>
                                                </label>
                                                <div class="counter">
                                                    <span class="btn" data-action="decrease">-</span>
                                                    <input type="number" class="count" value="1"> 
                                                    <span class="btn" data-action="increase">+</span>
                                                </div>
                                            </div>
                                            <div class="stack">
                                                <input type="checkbox" name="leaf-type" class="form-check-input" id="leaf-3" autocomplete="off">
                                                <label class="btn form-check-label" for="leaf-3">
                                                    <figure class="figure">
                                                        <img src="images/leaf/leaf-3.png" alt="">
                                                    </figure>
                                                    <span class="label">Regular 12 Leaf</span>
                                                </label>
                                                <div class="counter">
                                                    <span class="btn" data-action="decrease">-</span>
                                                    <input type="number" class="count" value="1"> 
                                                    <span class="btn" data-action="increase">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- fifth accordion  -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFifth">
                                    <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">Coat rack on footboard:  <a href="#" class="blue">Wooden pegs on right  + 85,</a> <a href="#">Wooden pegs  + 85 <span><i class="fa-solid fa-circle-question"></i></span></a> </span>
                                </div>
                                <div id="collapseFifth" class="accordion-collapse collapse show" aria-labelledby="headingFifth" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="alert" role="alert">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <p>Multiple options can be selected</p>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="coat-rack" checked class="btn-check" id="coat-rack-1" autocomplete="off">
                                            <label class="btn" for="coat-rack-1">Wooden pegs on right  <span>+ $85</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="coat-rack" checked class="btn-check" id="coat-rack-2" autocomplete="off">
                                            <label class="btn" for="coat-rack-2">Wooden pegs on right  <span>+ $85</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="coat-rack" class="btn-check" id="coat-rack-3" autocomplete="off">
                                            <label class="btn" for="coat-rack-3">Antler pegs on right  <span>+ $85</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="coat-rack" class="btn-check" id="coat-rack-4" autocomplete="off">
                                            <label class="btn" for="coat-rack-4">King Bed <span>+ $195</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="coat-rack" class="btn-check" id="coat-rack-5" autocomplete="off">
                                            <label class="btn" for="coat-rack-5">Wooden pegs on left both sides  <span>+ $185</span></label>
                                        </div>
                                        <div class="row form-line mt-3">
                                            <div class="col-12">
                                                <label for="" class="form-label">Message</label>
                                                <textarea class="form-control" id="notes" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- sixth accordion  -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFifth">
                                    <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">Fabric: <a href="#"><i class="fa-solid fa-circle-question"></i></a></span>
                                </div>
                                <div id="collapseFifth" class="accordion-collapse collapse show" aria-labelledby="headingFifth" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="alert" role="alert">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <p>Please note that the samples shown may not appear the same on all computer monitors. Please click here to request samples.</p>
                                        </div>
                                        <div class="row stack-area stack-tweleve">
                                            <?php 
                                                for($i=21;$i<=76;$i++){
                                            ?>
                                            <div class="stack">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-<?php echo $i; ?>" autocomplete="off">
                                                <label class="btn" for="stain-<?php echo $i; ?>">
                                                    <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                                            <img class="thumb-xl" src="images/fabric/thumb/fabric.png" alt="">
                                                            <h3 class="title">Description</h3>
                                                            <ul class="description">
                                                                <li>4-10 Dove</li>
                                                                <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                                                <li>Pattern Repeat: <span>Railroaded</span></li>
                                                                <li>Cleaning Code: <span>S</span></li>
                                                                <li>Abrasion Rating: <span>M</span></li>
                                                            </ul>
                                                        '>
                                                        <img src="images/fabric/thumb/fabric.png" alt="">
                                                        <div class="overlay">
                                                            <i class="cabincon size-55 check-white"></i>
                                                        </div>
                                                    </figure>
                                                    <span><strong>Medium OCS-110</strong></span>
                                                </label>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                        <div class="row specs-area">
                            <div class="col-md-4 specs">
                                <h3>Product Spects</h3>
                                <ul>
                                    <li>Choice of wood species & stains</li>
                                    <li>1” thick top</li>
                                    <li>Rounded corner top (small radius)</li>
                                    <li>Jasper edges</li>
                                    <li>30" high</li>
                                    <li>Wooden extension slides</li>
                                    <li>Center leg on tables with 3 or more 12” leaves</li>
                                    <li>Pewter nail heads on Collinsville chairs</li>
                                    <li>2 styles of chairs</li>
                                    <li>Upholstered seats & backs (Collinsville chairs)</li>
                                    <li>Upholstered seats (Mc Cohen chairs)</li>
                                </ul>
                            </div>
                            <div class="col-md-4 specs">
                                <h3>Standard Features</h3>
                                <ul>
                                    <li>Choice of wood species & stains</li>
                                    <li>1” thick top</li>
                                    <li>Rounded corner top (small radius)</li>
                                    <li>Jasper edges</li>
                                    <li>30" high</li>
                                    <li>Wooden extension slides</li>
                                    <li>Center leg on tables with 3 or more 12” leaves</li>
                                    <li>Pewter nail heads on Collinsville chairs</li>
                                    <li>2 styles of chairs</li>
                                    <li>Upholstered seats & backs (Collinsville chairs)</li>
                                    <li>Upholstered seats (Mc Cohen chairs)</li>
                                </ul>
                            </div>
                            <div class="col-md-4 specs">
                                <h3>Optional Features</h3>
                                <ul>
                                    <li>Choice of edge profiles</li>
                                    <li>V-groove in solid tops</li>
                                    <li>Breadboard ends</li>
                                    <li>1-18" butterfly leaf</li>
                                    <li>Up to 4-12" leaves</li>
                                    <li>Drawer in solid top table</li>
                                    <li>Silverware drawer organizer </li>
                                    <li>Exceptional variety of high-quality leather or fabric upholsteries</li>
                                    <li>Nail head choices for Collinsville chairs</li>
                                    <li>Shipping Information</li>
                                    <li>Return Policy</li>
                                    <li>Pre-Built Options</li>
                                    <li>Lead Time</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="Reviews & Testimonials">
                        <div class="row review-area">
                            <div class="col-md-9 quotation-area border-right">
                                <div class="heading-20">
                                    <h3>Customer Reviews for Indian Creek Panel Amish Bed</h3>
                                </div>
                                <div class="quotation">
                                    <p><em> I received my bedframe in perfect condition. It's gorgeous, I couldn't be happier <img src="https://mail.google.com/mail/e/263a" border="0" alt="☺" data-goomoji="263a">️. Thank you so much!</em></p>
                                    <p>
                                        <span class="author">Samantha William <i class="fa-solid fa-circle-check"></i></span>
                                        <span class="address">Ocean Shores, WA March 7, 2018</span>
                                    </p>
                                    <p class="history">Products Ordered: <a href="#">Madera Amish Recliner Loveseat</a>, <a href="#">Madera Amish Loveseat</a></p>
                                </div>
                                <?php 
                                    for($i=1;$i<5;$i++){
                                ?>
                                <div class="quotation">
                                    <blockquote>
                                    I received my Squanto Bed and it is perfect in every way. The stain and style matched my other furniture beautifully and I can't say enough good things about the craftmanship of the furniture and the people that I dealt with from placing the order to delivery. Everyone was very helpful with questions I had and I believe went out of their way to accommodate my special 
                                    </blockquote>
                                    <p>
                                        <span class="author">Samantha William <i class="fa-solid fa-circle-check"></i></span>
                                        <span class="address">Ocean Shores, WA March 7, 2018</span>
                                    </p>
                                    <p class="history">Products Ordered: <a href="#">Madera Amish Recliner Loveseat</a>, <a href="#">Madera Amish Loveseat</a></p>
                                </div>
                                <?php } ?>
                                <a href="#" class="btn btn-empty">See all 8 reviews</a>
                            </div>
                            <div class="col-md-3 rating-area">
                                <div class="heading-18">
                                    <h4>Average Rating:</h4>
                                </div>
                                <div class="rating-block">
                                    <div class="rating">
                                        <div class="rating-value" style="width:85%"></div>
                                    </div>
                                    <div class="value">4.6</div>
                                </div>
                                <div class="rating-bar-area">
                                    <div class="rating-bar">
                                        <div class="rating-value" style="width: 83%"></div>
                                        <span class="value">83%</span>
                                    </div>
                                    <div class="rating-bar">
                                        <div class="rating-value" style="width: 57%"></div>
                                        <span class="value">57%</span>
                                    </div>
                                    <div class="rating-bar">
                                        <div class="rating-value" style="width: 17%"></div>
                                        <span class="value">17%</span>
                                    </div>
                                    <div class="rating-bar">
                                        <div class="rating-value" style="width: 3%"></div>
                                        <span class="value">3%</span>
                                    </div>
                                    <div class="rating-bar">
                                        <div class="rating-value" style="width: 26%"></div>
                                        <span class="value">26%</span>
                                    </div>
                                    
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="slide product">
                    <figure class="figure">
                        <img src="images/products/slider/product-1.png" alt="">
                    </figure>
                    <h3 class="title"><a href="product.php">Franklin Amish File Cabinet</a></h3>
                    <p class="details">Product No. FGFH1128</p>
                    <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                    <div class="icon">
                        <button><i class="fa-solid fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('sections/layouts/footer.php') ?>