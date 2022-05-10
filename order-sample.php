<?php 
$page_title="Order Sample";
include_once('sections/layouts/header.php') 
?>


<?php include_once('sections/header-area.php') ?>

<div class="breadcrum-section">
    <div class="container">
        <div class="row">
            <nav class="col-md-12 breadcrumb-area" aria-label="breadcrumb">
                <ol class="breadcrumb dark reverse">
                    <li class="active">Wood Samples</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="section page-heading-section clearfix mb-3">
    <div class="container">
        <div class="row page-headline">
            <div class="col-md-12 col-12 section-title">
                <h2><span>Wood</span> Samples</h2>
                <p>Choosing the perfect furniture to complement your space can be stressful.</p>
                <p>Leave the stress and guesswork behind. Make a well-informed purchase by ordering free samples so you can better visualize your unique, final product. Feel the authenticity, watch it take the light, and imagine it as part of your space.</p>
            </div>
        </div>
    </div>
</div>

<div class="section page-content mb-5 clearfix">
    <div class="container">
        <form action="#" class="cabinform order-form">
            <div class="row border-bottom">
                <div class="col-md-12 form-section-title">
                    <h3>Choose up to 6 combinations:</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-part">
                        <h4 class="heading-20">Combination 1</h4>
                        
                        <div class="row form-line">
                            <div class="col">
                                <label for="" class="form-label">Select Wood</label>
                                <select class="form-select" aria-label="Select Wood">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-line">
                            <div class="col">
                                <label for="" class="form-label">Select Strain</label>
                                <select class="form-select" aria-label="Select Wood">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-part">
                        <h4 class="heading-20">Combination 2</h4>
                        
                        <div class="row form-line">
                            <div class="col">
                                <label for="" class="form-label">Select Wood</label>
                                <select class="form-select" aria-label="Select Wood">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-line">
                            <div class="col">
                                <label for="" class="form-label">Select Strain</label>
                                <select class="form-select" aria-label="Select Wood">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-part">
                        <h4 class="heading-20">Combination 2</h4>
                        
                        <div class="row form-line">
                            <div class="col">
                                <label for="" class="form-label">Select Wood</label>
                                <select class="form-select" aria-label="Select Wood">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-line">
                            <div class="col">
                                <label for="" class="form-label">Select Strain</label>
                                <select class="form-select" aria-label="Select Wood">
                                    <option selected>Select wood here</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 addition-area">
                    <span class="btn btn-addition">+ Add Combination</span>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 form-section-title">
                    <h3>Shipping Address:</h3>
                </div>
                <div class="col-md-12">
                    <div class="row form-line">
                        <div class="col">
                            <label for="" class="form-label">Firstname</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Firstname" required>
                        </div>
                        <div class="col">
                            <label for=""class="form-label">Lastname</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Lastname" required>
                        </div>
                    </div>
                    
                    <div class="row form-line">
                        <div class="col">
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Address" required>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="" aria-label="City" required>
                        </div>
                    </div>
                    
                    <div class="row form-line">
                        <div class="col">
                            <label for="" class="form-label">State</label>
                            <input type="text" class="form-control" placeholder="" aria-label="State" required>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Zip</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Zip" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="" aria-label="State" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col">
                            <label for="" class="form-label">Included Message</label>
                            <textarea class="form-control" id="notes" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-wide">Order Sample</button>
                </div>
            </div>
        </form>
    </div>
</div>



<?php include_once('sections/layouts/footer.php') ?>