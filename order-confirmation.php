<?php 
// dynamic page title
$page_title="Order Confirmation";

// inlude the <head></head> tag 
include_once('sections/layouts/header.php') 
?>

<!-- include the total header area  -->
<?php include_once('sections/header-area.php') ?>

<!-- breadcrumb section starts  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <!-- class dark for darker text and reverse for back direction  -->
                <ol class="breadcrumb dark reverse">
                    <li><a href="thank-you.php">Back</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends  -->

<!-- confirmatin text area starts  -->
<div class="section clearfix order-confirmation-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 confirmation-box">
                <h2>Thank You</h2>
                <h3>You will recieve an email confirmation at: <span>johndoe123@gmail.com</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="thank-you.php" class="btn btn-primary btn-large">Return to shopping</a>
            </div>
        </div>
    </div>
</div>
<!-- confirmation text area ends  -->

<!-- include the footer area  -->
<?php include_once('sections/layouts/footer.php') ?>