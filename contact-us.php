<?php 
// dynamic page titel
$page_title="Contact Us";

// include the header
include_once('sections/layouts/header.php') 
?>

<!-- .breadcrumb-section starts  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- .breadcrumb-section ends  -->

<!-- .contact-section starts  -->
<div class="section clearfix contact-section mb-5">
    <div class="container">
        <!-- page heading  -->
        <div class="row">
            <div class="col-md-12 mb-3 section-title small">
                <h3>Contact Us</h3>
            </div>
        </div>
        <!-- page heading ends -->
        
        <!-- .contact-area  -->
        <div class="row mb-5">
            <!-- left side with decrtiption  -->
            <div class="col-md-5 contact-area">
                <div class="contact-details">
                    <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                    
                    <ul class="contact-list">
                        <!-- email  -->
                        <li class="contact">
                            <div class="icon rounded-circle">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="details">
                                <h4>
                                    <span class="tag">Email</span>
                                    <span class="number"><a href="mailto:sales@cabinfield.com">sales@cabinfield.com</a></span>
                                </h4>
                                
                            </div>
                        </li>
                        <!-- email ends -->
                        
                        <!-- phone number starts  -->
                        <li class="contact">
                            <div class="icon rounded-circle">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="details">
                                <h4>
                                    <span class="tag">Phone Number</span>
                                    <span class="number"><a href="tel:+866-450-9663">866-450-9663</a></span>
                                </h4>
                            </div>
                        </li>
                        <!-- phone number starts  -->
                        
                        <!-- office address starts  -->
                        <li class="contact">
                            <div class="icon rounded-circle">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="details">
                                <h4>
                                    <span class="tag">Office</span>
                                    <span class="number">100 smith street coolingwood</span>
                                </h4>
                            </div>
                        </li>
                        <!-- office address ends  -->
                    </ul>
                </div>
            </div>
            <!-- left side with decrtiption ends -->
            
            <!-- form side starts -->
            <div class="col-md-7 contact-form-area">
                <!-- tab heading  -->
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-help-tab" data-bs-toggle="pill" data-bs-target="#pills-help" type="button" role="tab" aria-controls="pills-help" aria-selected="true">Help & Support</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Search Articles</button>
                    </li>
                </ul>
                <!-- tab heading ends -->
                
                <!-- .tab content starts -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- contact form area  -->
                    <div class="tab-pane fade show active" id="pills-help" role="tabpanel" aria-labelledby="pills-help-tab">
                        <form action="#" class="cabinform contact-form">
                            <div class="row form-line">
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Firstname</label>
                                    <input type="text" class="form-control" id="firstname" aria-label="Firstname" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Lastname</label>
                                    <input type="text" class="form-control" id="lastname" aria-label="Lastname" required>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" aria-label="Firstname" required>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-12">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" aria-label="Firstname" required>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="9"></textarea>
                                </div>
                            </div>
                            <div class="row form-line float-end">
                                <button type="submit" class="btn btn-primary btn-large">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- contact form area ends -->
                    
                    <!-- search form starts  -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <!-- this is dummy text, you can add form here  -->
                        <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                        <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                        <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                        <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                        <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                        <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                        <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                        <p>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</p>
                    </div>
                    <!-- search form ends -->
                </div>
                <!-- .tab content rnfd -->
            </div>
            <!-- form side ends -->
        </div>
        <!-- .contact-area ends -->
    </div>
</div>
<!-- .contact-section ends  -->

<!-- include footer  -->
<?php include_once('sections/layouts/footer.php') ?>