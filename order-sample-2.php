<?php 
// dynamic page title
$page_title="Order Sample - 2";

// include header
include_once('sections/layouts/header.php') 
?>

<!-- .breadcrumb section  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <!-- .dark for dark text, .reverse for back direction  -->
                <ol class="breadcrumb dark reverse">
                    <li class="active">Order Sample</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends  -->


<div class="section page-content mb-5 clearfix">
    <div class="container">
        <!-- page heading, medium size  -->
        <div class="row page-headline mb-5">
            <div class="col-md-12 col-12 mt-3 section-title medium">
                <h1><span>Order</span> Sample</h1>
                <p>Choosing the perfect furniture to complement your space can be stressful.</p>
                <p>Leave the stress and guesswork behind. Make a well-informed purchase by ordering free samples so you can better visualize your unique, final product. Feel the authenticity, watch it take the light, and imagine it as part of your space.</p>
            </div>
        </div>
        <!-- page heading, medium size ends  -->
        
        <!-- the form area starts  -->
        <form action="#" class="cabinform order-form has-stain-select">
            <div class="row" id="combination-area">
                <!-- sub section title  -->
                <div class="col-md-12 form-section-title">
                    <h3>Choose up to 6 combinations:</h3>
                </div>
                <!-- sub section title ends  -->
                
                <!-- one combination  -->
                <div class="col-md-6 combination" id="combination-1">
                    <div class="form-part">
                        <h4 class="heading-20">Combination 1</h4>
                        <!-- slect wood  -->
                        <div class="row form-line">
                            <div class="col">
                                <label for="wood-1" class="form-label">Select Wood</label>
                                <select class="form-select" aria-label="Select Wood" id="wood-1">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <!-- slect wood ends -->
                        
                        <!-- slect stain -->
                        <div class="row clearfix form-line select-train-area">
                            <div class="col">
                                <label for="stain-1" class="form-label">Select Stain</label>
                                <input type="text" class="select-stain" name="" id="stain-1" placeholder="Select Your Stain here">
                                <div class="clearfix stain-selection stack-area three-stack">
                                    <?php 
                                        for($i=1;$i<=9;$i++){
                                    ?>
                                    <div class="stack">
                                        <div class="image">
                                            <span class="btn" >
                                                <img src="images/stain/stain-<?php echo rand(1,3); ?>.png" alt="">
                                            </span>
                                            <span class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                        <h5>Medium OCS-<?php echo $i?></h5>
                                        <input type="radio" name="leaf-type-<?php echo $i?>" class="form-check-input" data-value="Medium OCS-110 - <?php echo $i?>" data-target="stain-1" id="stain-1<?php echo $i; ?>">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- slect strain -->
                    </div>
                </div>
                <!-- one combination ends -->
                
                <!-- one combination  -->
                <div class="col-md-6 combination" id="combination-2">
                    <div class="form-part">
                        <h4 class="heading-20">Combination 2</h4>
                        <span class="remover" data-cabin-target="#combination-2">&times; Remove</span>
                        <!-- slect wood -->
                        <div class="row form-line">
                            <div class="col">
                                <label for="wood-2" class="form-label">Select Wood</label>
                                <select class="form-select" aria-label="Select Wood" id="wood-2">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <!-- slect wood ends -->
                        
                        <!-- slect stain -->
                        <div class="row clearfix form-line select-train-area">
                            <div class="col">
                                <label for="stain-2" class="form-label">Select Stain</label>
                                <input type="text" class="select-stain" name="" id="stain-2" placeholder="Select Your Stain here">
                                <div class="clearfix stain-selection stack-area three-stack">
                                    <?php 
                                        for($i=1;$i<=9;$i++){
                                    ?>
                                    <div class="stack">
                                        <div class="image">
                                            <span class="btn">
                                                <img src="images/stain/stain-<?php echo rand(1,3); ?>.png" alt="">
                                            </span>
                                            <span class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                        <h5>Medium OCS-<?php echo $i?></h5>
                                        <input type="radio" name="leaf-type-<?php echo $i?>" class="form-check-input" data-value="Medium OCS-110 - <?php echo $i?>" data-target="stain-2" id="stain-2<?php echo $i; ?>">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- slect strain -->
                    </div>
                </div>
                <!-- one combination ends -->
                
                <!-- one combination  -->
                <div class="col-md-6 combination" id="combination-3">
                    <div class="form-part">
                        <h4 class="heading-20">Combination 3</h4>
                        <span class="remover" data-cabin-target="#combination-3">&times; Remove</span>
                        <!-- slect wood -->
                        <div class="row form-line">
                            <div class="col">
                                <label for="wood-3" class="form-label">Select Wood</label>
                                <select class="form-select" aria-label="Select Wood" id="wood-3">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <!-- slect wood ends -->
                        
                        <!-- slect stain -->
                        <div class="row clearfix form-line select-train-area">
                            <div class="col">
                                <label for="stain-3" class="form-label">Select Stain</label>
                                <input type="text" class="select-stain" name="" id="stain-3" placeholder="Select Your Stain here">
                                <div class="clearfix stain-selection stack-area three-stack">
                                    <?php 
                                        for($i=1;$i<=9;$i++){
                                    ?>
                                    <div class="stack">
                                        <div class="image">
                                            <span class="btn">
                                                <img src="images/stain/stain-<?php echo rand(1,3); ?>.png" alt="">
                                            </span>
                                            <span class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                        <h5>Medium OCS-<?php echo $i?></h5>
                                        <input type="radio" name="leaf-type-<?php echo $i?>" class="form-check-input" data-value="Medium OCS-110 - <?php echo $i?>" data-target="stain-3" id="stain-3<?php echo $i; ?>">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- slect strain -->
                    </div>
                </div>
                <!-- one combination ends -->
            </div>
            


        </form>
    </div>
</div>


<!-- inlcude page footer area  -->
<?php include_once('sections/layouts/footer.php') ?>