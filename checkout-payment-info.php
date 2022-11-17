<?php 
$page_title="Checkout Payment Info"; // dynamic page title

// include the head layout
include_once('sections/layouts/header.php') 
?>

<!-- breadcrum Section  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <!-- the class "reverse" is for back  -->
                <ol class="breadcrumb dark reverse">
                    <li><a href="#">Bedrooms</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section end  -->


<!-- payment form section start  -->
<div class="section clearfix payment-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page heading  -->
                <header class="section-title small">
                    <h3>Payment Information</h3>
                </header>
                <div class="payment-text">
                    <p>The deposit amount is 25% of the total. For gazebos, outdoor playsets and customized infoor furniture, we require a 50% deposit.</p>
                    <p>If you choose to pay by check it should be mailed to 15 Cabinfield Circle, Lakewood, NJ 08701. <br>Once your check clears we will process the order.</p>
                    <p>We will ship the furniture once the balance has cleared.</p>
                </div>
                <!-- page heading ends  -->
            </div>
        </div>
        <form action="#" class="row cabinform address-form">
            <!-- card information inputs  -->
            <div class="col-md-4">
                <div class="row form-line">
                    <div class="col-md-12">
                        <label for="cardno" class="form-label">Card number</label>
                        <input type="text" class="form-control" id="cardno" aria-label="Card Number" aria-describedby="cardhelp" placeholder="•••• •••• •••• ••••" required>
                        <span id="cardhelp" class="form-text">Pay by Check</span>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-md-12">
                        <label for="expiration" class="form-label">Expiration date</label>
                    </div>
                    <div class="col-md-6 col-6">
                        <select class="form-select gray" id="expiration" aria-label="Expiration Month">
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
                    <div class="col-md-6 col-6">
                        <select class="form-select gray" aria-label="Expiration Year">
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
                    <div class="col-6">
                        <label for="security_code" class="form-label">Security Code <span class="blue"><i class="fa-solid fa-circle-question"></i></span></label>
                        <input type="text" class="form-control" id="security_code" aria-label="Security Code" required>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-12">
                        <div class="border-top border-only">&nbsp;</div>
                        <label for="code" class="form-label">Enter Code</label>
                        <input type="text" class="form-control" id="code" aria-label="Enter Code" required>
                        <button class="btn btn-primary btn-large mt-3 mobile-full">Apply</button>
                    </div>
                </div>
            </div>
            <!-- card information inputs  -->
            
            <!-- billing address inputs  -->
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
            <!-- billing address inputs  -->
            
            <!-- summary card starts  -->
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
                        <li class="list-item">Due today: 
                        <button class="tooltip-button" data-bs-toggle="tooltip" title="Since our inception in 2005, we’ve built an unshakeable reputation of trust and confidence."><i class="fa-solid fa-circle-question blue"></i></button>
                         <span class="value">$0.00</span></li>
                    </ul>
                    <button type="submit" class="btn btn-primary btn-block">Continue to Payment</button>
                </div>
            </div>
            <!-- summary card ends  -->
        </form>
    </div>
</div>


<?php include_once('sections/layouts/footer.php') ?>