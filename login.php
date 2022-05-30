<?php 
// dynamic page title
$page_title="Login";

// include header
include_once('sections/layouts/header.php') 
?>

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
<div class="section clearfix auth-section">
    <div class="container">
        <div class="row page-headline">
            <div class="col-md-12 col-12 section-title medium">
                <h2>Login or Create an Account</h2>
                <p>To better protect your security, we’ve updated and improved our password-storage system! If you signed-up on our website before 22 Jan 2017, simply re-enter your email address here, and we’ll send further instructions. Problems? Just contact us; we’ll be glad to walk you through!</p>
            </div>
        </div>
        <div class="row auth-forms-area">
            <div class="col-md-6 login-section">
                <div class="header clearfix section-sub-title">
                    <h3>Registered customers</h3>
                    <p>If you have an account with us, please log in.</p>
                </div>
                <form action="" class="cabinform">
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" aria-label="Password" required>
                            <a href="#" class="forgot-link">Forgot Your Password</a>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-md-5 col-12">
                            <button class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 register-section">
                <div class="header clearfix section-sub-title">
                    <h3>New customers</h3>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, view and track your orders in your account and more.</p>
                </div>
                <div class="row">
                    <div class="col-md-5 col-12">
                        <button class="btn btn-primary btn-block">Create an Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- confirmation text area ends  -->

<!-- include the footer area  -->
<?php include_once('sections/layouts/footer.php') ?>