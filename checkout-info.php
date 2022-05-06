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
                        <a href="#" class="btn btn-primary edit-icon rounded-circle">
                            <i class="cabincon edit-white size-18"></i>
                        </a>
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
                        <a href="#" class="btn btn-primary edit-icon rounded-circle">
                            <i class="cabincon edit-white size-18"></i>
                        </a>
                    </div>
                    <div class="col-md-6 review-item">
                        <h4 class="form-label">Payment Info</h4>
                        <p>xxxx-xxxx-xxxx-4444</p>
                        <a href="#" class="btn btn-primary edit-icon rounded-circle">
                            <i class="cabincon edit-white size-18"></i>
                        </a>
                    </div>
                    <div class="col-md-6 review-item">
                        <h4 class="form-label">Gift Note</h4>
                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                        <a href="#" class="btn btn-primary edit-icon rounded-circle">
                            <i class="cabincon edit-white size-18"></i>
                        </a>
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
                        <li class="list-item">Due today: <span class="value">$0.00</span></li>
                    </ul>
                    <button type="submit" class="btn btn-primary btn-block">Continue to Payment</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('sections/order-summary.php') ?>

<?php include_once('sections/layouts/footer.php') ?>