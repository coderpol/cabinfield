<?php 
$page_title="Checkout Info";
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

<div class="section clearfix page-content review-section">
    <div class="container border-bottom">
        <div class="row">
            <div class="col-md-12 section-title small">
                <h3>Review</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
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
                        <a href="#" class="btn btn-primary edit-icon rounded-circle" data-bs-toggle="modal" data-bs-target="#shipping_address">
                            <i class="cabincon edit-white size-18"></i>
                        </a>
                        <div class="modal fade" id="shipping_address" tabindex="1" aria-labelledby="Shipping Address" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="#" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="shipping_address_label">Shipping Address</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">Firstname</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Firstname" value="John" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for=""class="form-label">Lastname</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Lastname" value="Doe" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                            <label for="" class="form-label">Company Name <span class="blue">(optional)</span></label>
                                                <input type="text" class="form-control" placeholder="" value="" aria-label="Company Name">
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="" class="form-label">Street Address</label>
                                                <input type="text" class="form-control" placeholder="" value="700 Carpenters Crossing" aria-label="Street Address" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="" class="form-label">Address line 2 <span class="blue">(optional)</span></label>
                                                <input type="text" class="form-control" placeholder="" value="BWW Ste 286309" aria-label="Address line 2">
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">City</label>
                                                <input type="text" class="form-control" placeholder="" value="Folcroft" aria-label="Citye" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">State</label>
                                                <input type="text" class="form-control" placeholder="" value="PA" aria-label="State" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" placeholder="" value="19032-2011" aria-label="Zip Code" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">Phone</label>
                                                <input type="text" class="form-control" placeholder="" value="(484) 5400190" aria-label="Phone" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">Ext <span class="blue">(optional)</span></label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Ext">
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
                    </div>
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
                        <a href="#" class="btn btn-primary edit-icon rounded-circle"  data-bs-toggle="modal" data-bs-target="#billing_address">
                            <i class="cabincon edit-white size-18"></i>
                        </a>
                        <div class="modal fade" id="billing_address" tabindex="2" aria-labelledby="Billing Address" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="#" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="billing_address_label">Shipping Address</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">Firstname</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Firstname" value="John" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for=""class="form-label">Lastname</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Lastname" value="Doe" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                            <label for="" class="form-label">Company Name <span class="blue">(optional)</span></label>
                                                <input type="text" class="form-control" placeholder="" value="" aria-label="Company Name">
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="" class="form-label">Street Address</label>
                                                <input type="text" class="form-control" placeholder="" value="700 Carpenters Crossing" aria-label="Street Address" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="" class="form-label">Address line 2 <span class="blue">(optional)</span></label>
                                                <input type="text" class="form-control" placeholder="" value="BWW Ste 286309" aria-label="Address line 2">
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">City</label>
                                                <input type="text" class="form-control" placeholder="" value="Folcroft" aria-label="Citye" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">State</label>
                                                <input type="text" class="form-control" placeholder="" value="PA" aria-label="State" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" placeholder="" value="19032-2011" aria-label="Zip Code" required>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">Phone</label>
                                                <input type="text" class="form-control" placeholder="" value="(484) 5400190" aria-label="Phone" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="" class="form-label">Ext <span class="blue">(optional)</span></label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Ext">
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
                    </div>
                    <div class="col-md-6 review-item">
                        <h4 class="form-label">Payment Info</h4>
                        <p>xxxx-xxxx-xxxx-4444</p>
                        <a href="#" class="btn btn-primary edit-icon rounded-circle" data-bs-toggle="modal" data-bs-target="#payment_info">
                            <i class="cabincon edit-white size-18"></i>
                        </a>
                        
                        <div class="modal fade" id="payment_info" tabindex="3" aria-labelledby="Payment Info" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="#" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="payment_info_label">Payment Info</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-line">
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Card number</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Card Number" aria-describedby="cardhelp" value="xxxx-xxxx-xxxx-4444" required>
                                                <span id="cardhelp" class="form-text">No credit card (use check)</span>
                                            </div>
                                        </div>
                                        <div class="row form-line">
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Expiration date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-select" aria-label="Expiration Month">
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
                                                <label for="" class="form-label">Security Code <span class="help rounded-circle">?</span></label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Street Address" required>
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
                    </div>
                    <div class="col-md-6 review-item">
                        <h4 class="form-label">Gift Note</h4>
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                        <a href="#" class="btn btn-primary edit-icon rounded-circle" data-bs-toggle="modal" data-bs-target="#gift_note">
                            <i class="cabincon edit-white size-18"></i>
                        </a>
                        
                        <div class="modal fade" id="gift_note" tabindex="4" aria-labelledby="Gift Note" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="#" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="payment_info_label">Gift Note</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-line">
                                            <div class="col-12">
                                                <label for="" class="form-label">Note</label>
                                                <textarea class="form-control" id="notes" rows="6">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</textarea>
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
                    </div>
                    
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
                        <!-- <li class="list-item">Due today: <span class="value">$0.00</span></li> -->
                    </ul>
                    <button type="submit" class="btn btn-primary btn-block">Continue to Payment</button>
                    <hr class="dropdown-divider">
                    <div class="note">
                        <p>By clicking “Place Your Order” above you agree to Cabinfield’s updated <a href="terms-of-use.php">Terms of Use</a> and <a href="privacy-policy.php">Privacy Policy</a>. </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include_once('sections/order-summary.php') ?>

<?php include_once('sections/layouts/footer.php') ?>