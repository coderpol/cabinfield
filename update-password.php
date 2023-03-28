<?php 
// dynamic page title
$page_title="Update Password";

// include header
include_once('sections/layouts/header.php') 
?>

<!-- confirmatin text area starts  -->
<div class="section clearfix auth-section pt-0">
    <div class="container">
        <div class="row auth-forms-area">
            <div class="col-md-6 login-section">
                <div class="header clearfix section-sub-title">
                    <h3>Change Your Password Here</h3>
                </div>
                <form action="" class="cabinform">
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="old_password" class="form-label">Old Password</label>
                            <input type="password" class="form-control" id="old_password" aria-label="Old Password" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="password" aria-label="Password" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="confirm_password" class="form-label">Re-Type New Password</label>
                            <input type="password" class="form-control" id="confirm_password" aria-label="Confirm Password" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-md-5 col-12 mt-3 mb-3">
                            <button class="btn btn-primary btn-block">Change Now</button>
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