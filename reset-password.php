<?php 
// dynamic page title
$page_title="Reset Password";

// include header
include_once('sections/layouts/header.php') 
?>

<!-- confirmatin text area starts  -->
<div class="section clearfix auth-section">
    <div class="container">
        <div class="row page-headline">
            <div class="col-md-12 col-12 section-title medium">
                <h2>Forgot Your Password?</h2>
            </div>
        </div>
        <div class="row auth-forms-area">
            <div class="col-md-6 login-section">
                <div class="header clearfix section-sub-title">
                    <h3>Reset Your Password Here</h3>
                </div>
                <form action="" class="cabinform">
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-md-5 col-12">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <div class="col-md-5 col-12">
                            <!-- you can use .btn-blue to make it blue bg  -->
                            <a href="login.php" class="btn btn-empty btn-block">Back to Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- confirmation text area ends  -->

<!-- include the footer area  -->
<?php include_once('sections/layouts/footer.php') ?>