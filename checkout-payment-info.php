<?php 
$page_title="Checkout Payment Info";
include_once('sections/layouts/header.php') 
?>


<?php include_once('sections/header-area.php') ?>

<div class="breadcrum-section">
    <div class="container">
        <div class="row">
            <nav class="col-md-12 breadcrumb-area" aria-label="breadcrumb">
                <ol class="breadcrumb dark reverse">
                    <li><a href="#">Bedrooms</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="section clearfix payment-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title small">
                <h3>Payment Information</h3>
            </div>
        </div>
        <form action="#" class="row cabinform address-form">
            <div class="col-md-4">
                <div class="row form-line">
                    <div class="col-md-12">
                        <label for="" class="form-label">Card number</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Card Number" aria-describedby="cardhelp" required>
                        <span id="cardhelp" class="form-text">No credit card (use check)</span>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-md-12">
                        <label for="" class="form-label">Expiration date</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Expiration Month">
                            <option selected>Month</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Expiration Year">
                            <option selected>Year</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                        </select>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-12">
                        <label for="" class="form-label">Security Code <span class="help rounded-circle">?</span></label>
                        <input type="text" class="form-control" placeholder="" aria-label="Street Address" required>
                        <div class="border-bottom border-only">&nbsp;</div>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-12">
                        <label for="" class="form-label">Enter Code</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Enter Code" required>
                        <button class="btn btn-primary btn-large mt-3">Apply</button>
                    </div>
                </div>
                
            </div>
            
            
            <div class="col-md-4 billing-area">
                <div class="row form-line mb-5">
                    <div class="col-12">
                        <p class="form-label">Billing address</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sameAsShipping">
                            <label class="form-check-label" for="flexCheckChecked">Same as shipping address</label>
                        </div>
                    </div>
                </div>
                <div id="billing-address">
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
                        <div class="col-12">
                        <label for="" class="form-label">Company Name <span class="blue">(optional)</span></label>
                            <input type="text" class="form-control" placeholder="" aria-label="Company Name">
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="" class="form-label">Street Address</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Street Address" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="" class="form-label">Address line 2 <span class="blue">(optional)</span></label>
                            <input type="text" class="form-control" placeholder="" aria-label="Address line 2">
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col">
                            <label for="" class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="" aria-label="City" required>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">State</label>
                            <input type="text" class="form-control" placeholder="" aria-label="State" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-md-6">
                            <label for="" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Zip Code" required>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Ext <span class="blue">(optional)</span></label>
                            <input type="text" class="form-control" placeholder="" aria-label="Ext">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 card summary-card">
                <div class="card-body shadow">
                    <h5 class="card-title">Order Summary</h5>
                    <ul class="list-group summary-list">
                        <li class="list-item">Items: <span class="value">$1,321.00</span></li>
                        <li class="list-item">Shipping & handling: <span class="value">$135.00</span></li>
                        <li class="list-item">Savings on combined shipping: <span class="value"> - $128.24</span></li>
                        <li class="list-item">Total before tax: <span class="value">$1,371.00</span></li>
                        <li class="list-item">Estimated Sales Tax: <span class="value">$0.00</span></li>
                        <li class="list-item total">Order total: <span class="value">$1,371.00</span></li>
                        <li class="list-item">Due today: <span class="value">$0.00</span></li>
                    </ul>
                    <button type="submit" class="btn btn-primary btn-block">Continue to Payment</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php include_once('sections/layouts/footer.php') ?>