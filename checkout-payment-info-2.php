<?php 
// page title
$page_title="Checkout Payment Info - V2";

// include header 
include_once('sections/layouts/header.php') 
?>

<!-- breadcrumb section starts  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <ol class="breadcrumb dark reverse">
                    <li><a href="#">Bedrooms</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-section ends  -->

<!-- page-content starts  -->
<div class="section clearfix page-content mb-100 pb-5">
    <div class="container">
        <!-- page title -->
        <div class="row">
            <header class="col-md-12 section-title small">
                <h2>Payment Information</h2>
            </header>
        </div>
        <!-- page title ends -->
        
        <!-- .page content  -->
        <div class="row">
            <form action="#" class="row cabinform">
                <div class="col-md-4">
                    <header class="heading-22">
                        <h3>To pay by check, click review to proceed to next step</h3>
                    </header>
                    
                    <h4>Payment Options:</h4>
                    <p>You may conveniently and securely pay for your gazebo online by credit card (Visa, MC or Discover). Or if you prefer, you may pay by money order or check payable to Cabinfield Woodworking.</p>
                    <h4>Special Note Concerning Payment by Check:</h4>
                    <p>If you are paying by check, note that your check must clear before your item is released for shipping.</p>
                    <h4>Special Note Concerning Payments for Gazebos and Customized Products:</h4>
                    <p>If you are ordering a gazebo or an item that is customized by staining or burning, note that we require a 50 percent deposit to process your order. When your gazebo or customized product is ready to ship, we will invoice you by e-mail for the remaining 50 percent. Upon receipt and clearance of your final payment, we will ship your product.</p><br/>
                    <a href="#" class="btn btn-empty mobile-full">Pay with credit or debit</a>
                </div>
            
            
                <div class="col-md-4 billing-area">
                    <div class="row form-line mb-5">
                        <div class="col-12">
                            <p class="form-label">Billing address</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="shipping_address_trigger">
                                <label class="form-check-label" for="shipping_address_trigger">Same as shipping address</label>
                            </div>
                        </div>
                    </div>
                    
                    <div id="billing-address">
                        <div class="row form-line">
                            <div class="col-md-6 col-12">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" class="form-control" id="firstname" aria-label="Firstname" required>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="lastname" class="form-label">Lastname</label>
                                <input type="text" class="form-control" id="lastname" aria-label="Lastname" required>
                            </div>
                        </div>
                        <div class="row form-line">
                            <div class="col-12">
                            <label for="company" class="form-label">Company Name <span class="gray">(optional)</span></label>
                                <input type="text" class="form-control" id="company" aria-label="Company Name">
                            </div>
                        </div>
                        <div class="row form-line">
                            <div class="col-12">
                                <label for="street" class="form-label">Street Address</label>
                                <input type="text" class="form-control" id="street" aria-label="Street Address" required>
                            </div>
                        </div>
                        <div class="row form-line">
                            <div class="col-12">
                                <label for="address_2" class="form-label">Address line 2 <span class="gray">(optional)</span></label>
                                <input type="text" class="form-control" id="address_2" aria-label="Address line 2">
                            </div>
                        </div>
                        <div class="row form-line">
                            <div class="col-md-6 col-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" aria-label="City" required>
                            </div>
                            <div class="col-md-6 col-6">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state" aria-label="State" required>
                            </div>
                        </div>
                        <div class="row form-line">
                            <div class="col-md-6  col-6">
                                <label for="zip" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="zip" aria-label="Zip Code" required>
                            </div>
                            <div class="col-md-6 col-6">
                                <label for="ext" class="form-label">Ext <span class="gray">(optional)</span></label>
                                <input type="text" class="form-control" id="ext" aria-label="Ext">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- .summary-card starts  -->
                <div class="col-md-4  card summary-card">
                    <div class="card-body shadow">
                        <h3 class="card-title">Order Summary</h3>
                        <ul class="list-group summary-list">
                            <li class="list-item">Items: <span class="value">$1,321.00</span></li>
                            <li class="list-item">Shipping & handling: <span class="value">$135.00</span></li>
                            <li class="list-item">Savings on combined shipping: <span class="value"> - $128.24</span></li>
                            <li class="list-item">Total before tax: <span class="value">$1,371.00</span></li>
                            <li class="list-item">Estimated Sales Tax: <span class="value">$0.00</span></li>
                            <li class="list-item total">Order total: <span class="value">$1,371.00</span></li>
                            <li class="list-item">Due today: 
                            <button class="tooltip-button" data-bs-toggle="tooltip" title="Since our inception in 2005, we’ve built an unshakeable reputation of trust and confidence."><i class="fa-solid fa-circle-question blue"></i></button>
                            <span class="value">$0.00</span></li>
                        </ul>
                        <button type="submit" class="btn btn-primary btn-block">Continue to Payment</button>
                    </div>
                </div>
                <!-- .summary-card ends  -->
            </form>
        </div>
        <!-- .page content ends -->
    </div>
</div>
<!-- page-content ends  -->

<!-- include footer  -->
<?php include_once('sections/layouts/footer.php') ?>