<?php 
$page_title="Checkout Payment Info - V2";
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

<div class="section clearfix page-content payment-section mb-100 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title small">
                <h2>Payment Information</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="heading-22">
                    <h3>To pay by check, click review to proceed to next step</h3>
                </div>
                
                <h4>Payment Options:</h4>
                <p>You may conveniently and securely pay for your gazebo online by credit card (Visa, MC or Discover). Or if you prefer, you may pay by money order or check payable to Cabinfield Woodworking.</p>
                <h4>Special Note Concerning Payment by Check:</h4>
                <p>If you are paying by check, note that your check must clear before your item is released for shipping.</p>
                <h4>Special Note Concerning Payments for Gazebos and Customized Products:</h4>
                <p>If you are ordering a gazebo or an item that is customized by staining or burning, note that we require a 50 percent deposit to process your order. When your gazebo or customized product is ready to ship, we will invoice you by e-mail for the remaining 50 percent. Upon receipt and clearance of your final payment, we will ship your product.</p><br/>
                <a href="#" class="btn btn-empty">Pay with credit or debit</a>
            </div>
            <div class="col-md-4 offset-md-1 card summary-card">
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

<?php include_once('sections/layouts/footer.php') ?>