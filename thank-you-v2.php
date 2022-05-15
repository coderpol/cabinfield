<?php 
// page title 
$page_title="Checkout Info";

// include header 
include_once('sections/layouts/header.php') 
?>

<!-- breadcrumb section starts  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <!-- .reverse for back direction  -->
                <ol class="breadcrumb dark reverse">
                    <li><a href="#">Continue Shipping</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-section ends  -->

<!-- .page-content starts  -->
<div class="section clearfix page-content">
    <div class="container border-bottom">
        <!-- header  -->
        <div class="row">
            <header class="col-md-12 section-title small mb-3">
                <h3>Order Placed</h3>
            </header>
        </div>
        <!-- header ends  -->
        
        <!-- main content  -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <!-- confirmation icon  -->
                        <div class="icon thanks-icon">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <!-- confirmation icon ends  -->
                    </div>
                </div>
                <div class="row">
                    <!-- order details  -->
                    <div class="col-md-6">
                        <h4 class="form-label">Order #9566275496</h4>
                        <p>Thank you for your order. Our bearded Amish woodsmen have been set off to cut trees for your furniture. We will contact you as soon as it is ready to be shipped.</p>
                        <p>To cancel items or edit yor order please contact us</p>
                        
                    </div>
                    <!-- order details ends -->
                    
                    <!-- billing address  -->
                    <div class="col-md-6">
                        <h4 class="form-label">Billing Address</h4>
                        <address>
                            <p>
                                700 Carpenters Crossing<br/>
                                BWW Ste 286309<br/>
                                Folcroft, PA 19032-2011<br/>
                                United States<br/>
                            </p>
                        </address>
                    </div>
                    <!-- billing address ends  -->
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-12">
                        <a class="btn btn-empty btn-large btn-thanks" href="mailto:service@cabinfield.com"><span class="title">EMAIL</span><span class="details">service@cabinfield.com</span></a>
                        <a class="btn btn-empty btn-large btn-thanks" href="tel:+866-450-WOOD(9663)"><span class="title">PHONE</span><span class="details">866-450-WOOD (9663)</span></a>
                    </div>
                </div>
            </div>
            
            <!-- order summary card  -->
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
                    <a href="#" class="btn btn-empty btn-block">Order History</a>
                </div>
            </div>
            <!-- order summary card ends -->
        </div>
        <!-- main content ends -->
    </div>
</div>

<!-- inlcude the summary of the order  -->
<?php include_once('sections/order-summary.php') ?>


<!-- include the footer  -->
<?php include_once('sections/layouts/footer.php') ?>