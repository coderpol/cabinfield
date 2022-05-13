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
        <div class="row product-gallery-area">
            <div class="col-md-6 product-gallery">
                <div class="gallery-thumb">
                    <span class="thumb selected" data-full="images/products/gallery/bed.png" data-caption="This is the caption for 1st image"><img src="images/products/gallery/bed-thumb.png" /></span> 
                    <span class="thumb" data-full="images/products/gallery/bed.png" data-caption="This is the caption for 2nd image"><img src="images/products/gallery/bed-thumb.png" /></span> 
                    <span class="thumb" data-full="images/products/gallery/bed.png" data-caption="This is the caption for 3rd image"><img src="images/products/gallery/bed-thumb.png" /></span> 
                    <span class="thumb" data-full="images/products/gallery/bed.png" data-caption="This is the caption for 4th image"><img src="images/products/gallery/bed-thumb.png" /></span> 
                </div>
                
                <div class="gallery-full">
                    <img class="full" src="images/products/gallery/bed.png" alt="">
                    <p>Caption goes here</p>
                </div>
                <div class="button-area">
                    <a href="#" class="icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
            </div>
            <div class="col-md-6 product-details">
                <div class="section-title small">
                    <h2>Kennet Flat Pannel Amish Bed</h2>
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
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Customize</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Specs & Features</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Reviews & Testimonials</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <form action="#" class="cabinform tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="Customize">
                        <div class="accordion" id="customizations">
                            <!-- First accordion -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bed Size:  <a href="#" class="blue">Full Bed</a> <a href="#"><i class="fa-solid fa-circle-question"></i></a></button>
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Wood type:  <a href="#" class="blue">Brown Maple</a> <a href="#"><i class="fa-solid fa-circle-question"></i></a></button>
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Stain:  <a href="#" class="blue"><i class="fa-solid fa-circle-question"></i></a></button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="alert" role="alert">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <p>Please note that the stain or paint colors shown may not appear the same on all computer monitors. Actual results on your furniture may also vary due to natural variations in the color, grain, and texture of the wood. Please click here to request samples.</p>
                                        </div>
                                        <div class="stack-area">
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-1" autocomplete="off">
                                                <label class="btn" for="stain-1">
                                                    <img src="images/stain/stain-1.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-2" autocomplete="off">
                                                <label class="btn" for="stain-2">
                                                    <img src="images/stain/stain-2.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-3" autocomplete="off">
                                                <label class="btn" for="stain-3">
                                                    <img src="images/stain/stain-3.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-4" autocomplete="off">
                                                <label class="btn" for="stain-4">
                                                    <img src="images/stain/stain-1.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-5" autocomplete="off">
                                                <label class="btn" for="stain-5">
                                                    <img src="images/stain/stain-2.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-6" autocomplete="off">
                                                <label class="btn" for="stain-6">
                                                    <img src="images/stain/stain-3.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-7" autocomplete="off">
                                                <label class="btn" for="stain-7">
                                                    <img src="images/stain/stain-1.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-8" autocomplete="off">
                                                <label class="btn" for="stain-8">
                                                    <img src="images/stain/stain-1.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-9" autocomplete="off">
                                                <label class="btn" for="stain-9">
                                                    <img src="images/stain/stain-2.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-10" autocomplete="off">
                                                <label class="btn" for="stain-10">
                                                    <img src="images/stain/stain-3.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-11" autocomplete="off">
                                                <label class="btn" for="stain-11">
                                                    <img src="images/stain/stain-1.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-12" autocomplete="off">
                                                <label class="btn" for="stain-12">
                                                    <img src="images/stain/stain-2.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-13" autocomplete="off">
                                                <label class="btn" for="stain-13">
                                                    <img src="images/stain/stain-3.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            <div class="stain">
                                                <input type="radio" name="stain-type" class="btn-check" id="stain-14" autocomplete="off">
                                                <label class="btn" for="stain-14">
                                                    <img src="images/stain/stain-1.png" alt="">
                                                    Medium OCS-110 
                                                </label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- fourth accordion  -->
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Leaf Option:  <a href="#" class="blue">Solid Top (Standard)</a> <a href="#"><i class="fa-solid fa-circle-question"></i></a></button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="alert" role="alert">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <p>Please note that the stain or paint colors shown may not appear the same on all computer monitors. Actual results on your furniture may also vary due to natural variations in the color, grain, and texture of the wood. Please click here to request samples.</p>
                                        </div>
                                        <div class="stack-area show-checkbox">
                                            <div class="stain">
                                                <input type="checkbox" name="leaf-type" class="form-check-input" checked id="leaf-1" autocomplete="off">
                                                <label class="btn form-check-label" for="leaf-1">
                                                    <img src="images/leaf/leaf-1.png" alt="">
                                                    Solid Top
                                                </label>
                                                <div class="counter">
                                                    <span class="btn" data-action="decrease">-</span>
                                                    <input type="number" class="count" value="1"> 
                                                    <span class="btn" data-action="increase">+</span>
                                                </div>
                                            </div>
                                            <div class="stain">
                                                <input type="checkbox" name="leaf-type" class="form-check-input" id="leaf-2" autocomplete="off">
                                                <label class="btn form-check-label" for="leaf-2">
                                                    <img src="images/leaf/leaf-2.png" alt="">
                                                    Regular 12 Leaf
                                                </label>
                                                <div class="counter">
                                                    <span class="btn" data-action="decrease">-</span>
                                                    <input type="number" class="count" value="1"> 
                                                    <span class="btn" data-action="increase">+</span>
                                                </div>
                                            </div>
                                            <div class="stain">
                                                <input type="checkbox" name="leaf-type" class="form-check-input" id="leaf-3" autocomplete="off">
                                                <label class="btn form-check-label" for="leaf-3">
                                                    <img src="images/leaf/leaf-3.png" alt="">
                                                    Regular 12 Leaf
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">Coat rack on footboard:  <a href="#" class="blue">Wooden pegs on right  + 85,</a> <a href="#">Wooden pegs on left  + 85</a> <a href="#"><i class="fa-solid fa-circle-question"></i></a></button>
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">Fabric: <a href="#"><i class="fa-solid fa-circle-question"></i></a></button>
                                </div>
                                <div id="collapseFifth" class="accordion-collapse collapse show" aria-labelledby="headingFifth" data-bs-parent="#customizations">
                                    <div class="accordion-body">
                                        <div class="alert" role="alert">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <p>Please note that the samples shown may not appear the same on all computer monitors. Please click here to request samples.</p>
                                        </div>
                                        <div class="row stack-tweleve">
                                            <?php 
                                                for($i=1;$i<=36;$i++){
                                            ?>
                                            <div class="col-md-1 stack">
                                                <img src="images/fabric/thumb/fabric.png" alt="">
                                                <p><strong>Medium OCS-110 </strong></p>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                        <div class="row specs-area">
                            <div class="col-md-4 specs">
                                <h3>Product Spects</h3>
                                <ul class="speclist">
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
                                <ul class="speclist">
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
                                <ul class="speclist">
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
                <?php include("sections/product-slider.php"); ?>
            </div>
        </div>
    </div>
</div>


<?php include_once('sections/layouts/footer.php') ?>