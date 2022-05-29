<?php 
// page title
$page_title="Checkout Info";

// include header
include_once('sections/layouts/header.php') 
?>

<!-- breadcrumb section  -->
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
<!-- breadcrumb section ends -->

<!-- .page-content  -->
<div class="section clearfix page-content review-section">
    <div class="container border-bottom">
        <!-- page title  -->
        <div class="row">
            <header class="col-md-12 section-title small mb-3">
                <h3>Review</h3>
            </header>
        </div>
        <!-- page title ends -->
        
        <!-- .content  -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <!-- shipping address starts  -->
                    <div class="col-md-6 review-item">
                        <h4 class="form-label">Shipping Address</h4>
                        <address>
                            <p>
                            John Doe<br/>
                            700 Carpenters Crossing<br/>
                            BWW Ste 286309<br/>
                            Folcroft, PA 19032-2011<br/>
                            United States<br/>
                            (484) 5400190
                            </p>
                        </address>
                        <button class="btn btn-primary edit-icon rounded-circle" data-bs-toggle="modal" data-bs-target="#shipping_address">
                            <i class="cabincon edit-white size-18"></i>
                        </button>
                        
                        <!-- modal to edit shipping address  -->
                        <div class="modal fade" id="shipping_address" tabindex="1" aria-labelledby="shipping_address" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="#" class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title" id="shipping_address_label">Shipping Address</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="firstname" class="form-label">Firstname</label>
                                                <input type="text" class="form-control" id="firstname" aria-label="Firstname" value="John" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="lastname" class="form-label">Lastname</label>
                                                <input type="text" class="form-control" id="lastname" aria-label="Lastname" value="Doe" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="company" class="form-label">Company Name <span class="gray">(optional)</span></label>
                                                <input type="text" class="form-control" id="company" value="" aria-label="Company Name">
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="street" class="form-label">Street Address</label>
                                                <input type="text" class="form-control" id="street" value="700 Carpenters Crossing" aria-label="Street Address" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="address" class="form-label">Address line 2 <span class="gray">(optional)</span></label>
                                                <input type="text" class="form-control" id="address" value="BWW Ste 286309" aria-label="Address line 2">
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="city" value="Folcroft" aria-label="City" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="state" class="form-label">State</label>
                                                <input type="text" class="form-control" id="state" value="PA" aria-label="State" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6">
                                                <label for="zip" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" id="zip" value="19032-2011" aria-label="Zip Code" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="phone" value="(484) 5400190" aria-label="Phone" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="ext" class="form-label">Ext <span class="gray">(optional)</span></label>
                                                <input type="text" class="form-control" id="ext" aria-label="Ext">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- modal to edit shipping address ends -->
                    </div>
                    <!-- shipping address starts  -->
                    
                    <!-- billing address starts  -->
                    <div class="col-md-6 review-item">
                        <h4 class="form-label">Billing Address</h4>
                        <address>
                            <p>
                                700 Carpenters Crossing<br/>
                                BWW Ste 286309<br/>
                                Folcroft, PA 19032-2011<br/>
                                United States<br/>
                            </p>
                        </address>
                        <button class="btn btn-primary edit-icon rounded-circle"  data-bs-toggle="modal" data-bs-target="#billing_address">
                            <i class="cabincon edit-white size-18"></i>
                        </button>
                        <!-- modal for billing address edit  -->
                        <div class="modal fade" id="billing_address" tabindex="2" aria-labelledby="billing_address" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="#" class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title" id="billing_address_label">Shipping Address</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="firstname_2" class="form-label">Firstname</label>
                                                <input type="text" class="form-control" id="firstname_2" aria-label="Firstname" value="John" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="lastname_2" class="form-label">Lastname</label>
                                                <input type="text" class="form-control" id="lastname_2" aria-label="Lastname" value="Doe" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="company_2" class="form-label">Company Name <span class="gray">(optional)</span></label>
                                                <input type="text" class="form-control" id="company_2" value="" aria-label="Company Name">
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="street_2" class="form-label">Street Address</label>
                                                <input type="text" class="form-control" id="street_2" value="700 Carpenters Crossing" aria-label="Street Address" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="address_2" class="form-label">Address line 2 <span class="gray">(optional)</span></label>
                                                <input type="text" class="form-control" id="address_2" value="BWW Ste 286309" aria-label="Address line 2">
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="city_2" class="form-label">City</label>
                                                <input type="text" class="form-control" id="city_2" value="Folcroft" aria-label="City" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="state_2" class="form-label">State</label>
                                                <input type="text" class="form-control" id="state_2" value="PA" aria-label="State" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6">
                                                <label for="zip_2" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" id="zip_2" value="19032-2011" aria-label="Zip Code" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="phone_2" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="phone_2" value="(484) 5400190" aria-label="Phone" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="ext_2" class="form-label">Ext <span class="gray">(optional)</span></label>
                                                <input type="text" class="form-control" id="ext_2" aria-label="Ext">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- modal for shipping address edit ends -->
                    </div>
                    <!-- billing address starts  -->
                    
                    <!-- .payment info starts  -->
                    <div class="col-md-6 review-item">
                        <h4 class="form-label">Payment Info</h4>
                        <p>xxxx-xxxx-xxxx-4444</p>
                        <button class="btn btn-primary edit-icon rounded-circle" data-bs-toggle="modal" data-bs-target="#payment_info">
                            <i class="cabincon edit-white size-18"></i>
                        </button>
                        
                        <!-- modal to edit payment info  -->
                        <div class="modal fade" id="payment_info" tabindex="3" aria-labelledby="payment_info" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="#" class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title" id="payment_info_label">Payment Info</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-line">
                                            <div class="col-md-12">
                                                <label for="cardno" class="form-label">Card number</label>
                                                <input type="text" class="form-control" id="cardno" aria-label="Card Number" aria-describedby="cardhelp" value="xxxx-xxxx-xxxx-4444" required>
                                                <span id="cardhelp" class="form-text">No credit card (use check)</span>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-12">
                                                <label for="expiration" class="form-label">Expiration date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-select" aria-label="Expiration Month" id="expiration">
                                                    <option value="01">01</option>
                                                    <option selected value="02">02</option>
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
                                                    <option value="2022">2022</option>
                                                    <option selected value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="code" class="form-label">Security Code <span class="help rounded-circle">?</span></label>
                                                <input type="text" class="form-control" id="code" aria-label="Street Address" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- modal to edit payment info  -->
                    </div>
                    <!-- .payment info ends  -->
                    
                    <!-- gift note area  -->
                    <div class="col-md-6 review-item">
                        <h4 class="form-label">Gift Note</h4>
                        <p>Lorem ipsum is id text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                        <button class="btn btn-primary edit-icon rounded-circle" data-bs-toggle="modal" data-bs-target="#gift_note">
                            <i class="cabincon edit-white size-18"></i>
                        </button>
                        
                        <!-- modal to edit gift  -->
                        <div class="modal fade" id="gift_note" tabindex="4" aria-labelledby="gift_note" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="#" class="modal-content">
                                    <div class="modal-header">
                                        <p class="modal-title" id="gift_note_label">Gift Note</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="notes" class="form-label">Note</label>
                                                <textarea class="form-control" id="notes" rows="6">Lorem ipsum is id text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- modal to edit gift  -->
                    </div>
                    <!-- gift note area  -->
                    
                    <!-- .page content  -->
                    <div class="col-md-12 mt-3">
                        <div class="section-sub-title">
                            <h4>Important! Please read before submitting your order!</h4>
                        </div>

                        <p>We treasure the opportunity to partner with our customers in designing and building beautiful handcrafted furniture that will last for generations.</p>
                        <p>When you submit your order, you will receive a detailed email order confirmation, which includes the final specs of your order. We urge you to read through your order confirmation carefully.</p>
                        <p>We cannot remember every detail of our many phone and email conversations with customers, so it is vital that you check the order confirmation to verify that the details of your order are correct and all the options and specs you desire are included.</p>
                        <p>Your order will be built according to the specs on the site and the specific information included in your written order confirmation.</p>
                        <p>If you do not receive an order confirmation shortly after submitting your order, please check your spam/junk folder.</p>
                        <p>If you are unable to locate your order confirmation please contact us immediately by phone or email at <a href="mailto:service@cabinfield.com">service@cabinfield.com</a>.</p>
                    </div>
                    <!-- .page content  -->
                </div>
            </div>
            
            <!-- summary card starts  -->
            <div class="col-md-4 card summary-card">
                <div class="card-body shadow">
                    <h4 class="card-title">Order Summary</h4>
                    <ul class="list-group summary-list">
                        <li class="list-item">Items: <span class="value">$1,321.00</span></li>
                        <li class="list-item">Shipping & handling: <span class="value">$135.00</span></li>
                        <li class="list-item">Savings on combined shipping: <span class="value"> - $128.24</span></li>
                        <li class="list-item">Total before tax: <span class="value">$1,371.00</span></li>
                        <li class="list-item">Estimated Sales Tax: <span class="value">$0.00</span></li>
                        <li class="list-item total">Order total: <span class="value">$1,371.00</span></li>
                        <!-- <li class="list-item">Due today: <span class="value">$0.00</span></li> -->
                    </ul>
                    <button type="submit" class="btn btn-primary btn-block">Continue to Payment</button>
                    <hr class="dropdown-divider">
                    <div class="note">
                        <p>By clicking “Place Your Order” above you agree to Cabinfield’s updated <a href="terms-of-use.php">Terms of Use</a> and <a href="privacy-policy.php">Privacy Policy</a>. </p>
                    </div>
                </div>
            </div>
            <!-- summary card endss  -->
        </div>
        <!-- content ends  -->
    </div>
</div>
<!-- .page-content ends -->

<!-- include order summary  -->
<?php include_once('sections/order-summary.php') ?>

<!-- include footer  -->
<?php include_once('sections/layouts/footer.php') ?>