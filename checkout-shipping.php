<?php 
$page_title="Checkout Shipping";
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

<div class="section clearfix shipping-section">
    <div class="container border-bottom">
        <div class="row">
            <div class="col-md-12 section-title small">
                <h3>Shipping Address</h3>
            </div>
        </div>
        <form action="#" class="row cabinform shipping-address">
            <div class="col-md-4">
                <div class="row form-line">
                    <div class="col">
                        <label for="" class="form-label">Firstname</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Firstname" require>
                    </div>
                    <div class="col">
                        <label for=""class="form-label">Lastname</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Lastname" require>
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
                        <input type="text" class="form-control" placeholder="" aria-label="Street Address" require>
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
                        <input type="text" class="form-control" placeholder="" aria-label="Citye" require>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">State</label>
                        <input type="text" class="form-control" placeholder="" aria-label="State" require>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-md-6">
                        <label for="" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Zip Code" require>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Phone" require>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Ext <span class="blue">(optional)</span></label>
                        <input type="text" class="form-control" placeholder="" aria-label="Ext">
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-4">
                <div class="row form-line">
                    <div class="col-12">
                        <label for="notes" class="form-label">Shipping & Gift Notes <span>(optional)</span></label>
                        <textarea class="form-control" id="notes" rows="5"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 card summary-card">
                <div class="card-body shadow-lg">
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

<?php include_once('sections/order-summary.php') ?>

<?php include_once('sections/layouts/footer.php') ?>