<?php 
$page_title="Checkout Shipping"; // dynamic page title

// include header
include_once('sections/layouts/header.php') 
?>

<!-- breadcrumb section  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <!-- add class "reverse" for breadcrumb with back button  -->
                <ol class="breadcrumb dark reverse">
                    <li><a href="#">Bedrooms</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends  -->

 <!-- shipping section starts  -->
<div class="section clearfix shipping-section">
    <div class="container border-bottom">
        <!-- form heading -->
        <div class="row">
            <div class="col-md-12 section-title small">
                <h3>Shipping Address</h3>
            </div>
        </div>
        <!-- form heading ends  -->
        
        <!-- form starts  -->
        <form action="#" class="row cabinform address-form">
            <!-- base information  -->
            <div class="col-md-4">
                <!-- form line with 2 input  -->
                <div class="row form-line">
                    <!-- single filed   -->
                    <div class="col">
                        <label for="fname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="fname" aria-label="Firstname" required>
                    </div>
                    <!-- single filed ends  -->
                    
                    <!-- single filed   -->
                    <div class="col">
                        <label for="lname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="lname" aria-label="Lastname" required>
                    </div>
                    <!-- single filed ends  -->
                </div>
                <!-- form line with 2 input ends  -->
                
                <!-- form line with 1 input  -->
                <div class="row form-line">
                    <div class="col-12">
                    <label for="com_name" class="form-label">Company Name <span class="blue">(optional)</span></label>
                        <input type="text" class="form-control" id="com_name" aria-label="Company Name">
                    </div>
                </div>
                <!-- form line with 1 input ends  -->
                
                <div class="row form-line">
                    <div class="col-12">
                        <label for="street" class="form-label">Street Address</label>
                        <input type="text" class="form-control" id="street" aria-label="Street Address" required>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-12">
                        <label for="address_2" class="form-label">Address line 2 <span class="blue">(optional)</span></label>
                        <input type="text" class="form-control" id="address_2"  aria-label="Address line 2">
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city"  aria-label="Citye" required>
                    </div>
                    <div class="col">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state"  aria-label="State" required>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-md-6">
                        <label for="zip" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip"  aria-label="Zip Code" required>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone"  aria-label="Phone" required>
                    </div>
                    <div class="col">
                        <label for="ext" class="form-label">Ext <span class="blue">(optional)</span></label>
                        <input type="text" class="form-control" id="ext"  aria-label="Ext">
                    </div>
                </div>
            </div>
            <!-- base information ends  -->
            
            <!-- shipping notes info  -->
            <div class="col-md-4">
                <div class="row form-line">
                    <div class="col-12">
                        <label for="notes" class="form-label">Shipping & Gift Notes <span>(optional)</span></label>
                        <textarea class="form-control" id="notes" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <!-- shipping notes info ends  -->
            
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
                        <li class="list-item">Due today: <span class="value">$0.00</span></li>
                    </ul>
                    <button type="submit" class="btn btn-primary btn-block">Continue to Payment</button>
                </div>
            </div>
            <!-- summary card ends  -->
        </form>
    </div>
</div>

<!-- Order summary common part including  -->
<?php include_once('sections/order-summary.php') ?>


<!-- footer area includes  -->
<?php include_once('sections/layouts/footer.php') ?>