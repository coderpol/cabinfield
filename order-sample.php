<?php 
// dynamic page title
$page_title="Order Sample";

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
            <div class="col-md-12 col-12 section-title medium">
                <h2><span>Order</span> Sample</h2>
                <p>Choosing the perfect furniture to complement your space can be stressful.</p>
                <p>Leave the stress and guesswork behind. Make a well-informed purchase by ordering free samples so you can better visualize your unique, final product. Feel the authenticity, watch it take the light, and imagine it as part of your space.</p>
            </div>
        </div>
        <!-- page heading, medium size ends  -->
        
        <!-- the form area starts  -->
        <form action="#" class="cabinform order-form">
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
                        
                        <!-- slect strain -->
                        <div class="row form-line">
                            <div class="col">
                                <label for="strain-1" class="form-label">Select Strain</label>
                                <select class="form-select" aria-label="Select Wood" id="strain-1">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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
                        
                        <!-- slect strain -->
                        <div class="row form-line">
                            <div class="col">
                                <label for="strain-2" class="form-label">Select Strain</label>
                                <select class="form-select" aria-label="Select Wood" id="strain-2">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
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
                        
                        <!-- slect strain -->
                        <div class="row form-line">
                            <div class="col">
                                <label for="strain-3" class="form-label">Select Strain</label>
                                <select class="form-select" aria-label="Select Wood" id="strain-3">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <!-- slect strain ends -->
                    </div>
                </div>
                <!-- one combination ends -->
            </div>
            
            <!-- add button area  -->
            <div class="row border-bottom">
                <div class="col-md-12 addition-area">
                    <span class="btn btn-addition" id="btn-addition">+ Add Combination</span>
                </div>
            </div>
            <!-- add button area ends  -->
            
            <!-- shipping address input area  -->
            <div class="row">
                <div class="col-md-12 form-section-title">
                    <h3>Shipping Address:</h3>
                </div>
                <div class="col-md-12">
                    <div class="row form-line">
                        <div class="col">
                            <label for="first-name" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="first-name" aria-label="Firstname" required>
                        </div>
                        <div class="col">
                            <label for="last-name" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="last-name" aria-label="Lastname" required>
                        </div>
                    </div>
                    
                    <div class="row form-line">
                        <div class="col">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" aria-label="Address" required>
                        </div>
                        <div class="col">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" aria-label="City" required>
                        </div>
                    </div>
                    
                    <div class="row form-line">
                        <div class="col">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" aria-label="State" required>
                        </div>
                        <div class="col">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" aria-label="Zip" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-label="State" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col">
                            <label for="notes" class="form-label">Included Message</label>
                            <textarea class="form-control" id="notes" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-wide">Order Sample</button>
                </div>
            </div>
            <!-- shipping address input area ends -->
        </form>
    </div>
</div>


<!-- inlcude page footer area  -->
<?php include_once('sections/layouts/footer.php') ?>