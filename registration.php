<?php 
// dynamic page title
$page_title="Registration";

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
                <h2>Create an Account</h2>
            </div>
        </div>
        <form action="" class="cabinform">
            <div class="row auth-forms-area">
                <div class="col-md-6">
                    <div class="header clearfix section-sub-title">
                        <h3>Persional Information</h3>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first-name" aria-label="First Name" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last-name" aria-label="Last Name" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="subscribe">
                                <label class="form-check-label" for="subscribe">Sign Up for Newsletter</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 register-section">
                    <div class="header clearfix section-sub-title">
                        <h3>Login Information</h3>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" aria-label="Password" required>
                        </div>
                    </div>
                    <div class="row form-line">
                        <div class="col-12">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-password" aria-label="Confirm Password" required>
                        </div>
                    </div>
                    <div class="row form-line submit-button">
                        <div class="col-md-5 col-12">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- confirmation text area ends  -->

<!-- include the footer area  -->
<?php include_once('sections/layouts/footer.php') ?>