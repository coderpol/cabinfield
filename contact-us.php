<?php 
$page_title="Contact Us";
include_once('sections/layouts/header.php') 
?>


<?php include_once('sections/header-area.php') ?>

<div class="breadcrum-section">
    <div class="container">
        <div class="row">
            <nav class="col-md-12 breadcrumb-area" aria-label="breadcrumb">
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li>Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="section clearfix contact-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3 section-title small">
                <h3>Contact Us</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-5 contact-area">
                <div class="contact-details">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi obcaecati eaque ex excepturi quos vel quo iste qui quia repellendus</p>
                    
                    <ul class="contact-list">
                        <li class="contact">
                            <div class="icon rounded-circle">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="details">
                                <p class="tag">Email</p>
                                <p class="number"><a href="mailto:sales@cabinfield.com">sales@cabinfield.com</a></p>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="icon rounded-circle">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="details">
                                <p class="tag">Phone Number</p>
                                <p class="number"><a href="tel:+866-450-9663">866-450-9663</a></p>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="icon rounded-circle">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="details">
                                <p class="tag">Office</p>
                                <p class="number">100 smith street coolingwood</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 contact-form-area">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-help-tab" data-bs-toggle="pill" data-bs-target="#pills-help" type="button" role="tab" aria-controls="pills-help" aria-selected="true">Help & Support</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Search Articles</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-help" role="tabpanel" aria-labelledby="pills-help-tab">
                        <form action="#" class="cabinform contact-form">
                            <div class="row form-line">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Firstname</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Firstname" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Lastname</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Lastname" required>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="" aria-label="Firstname" required>
                                </div>
                            </div>
                            <div class="row form-line">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Subject</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Firstname" required>
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
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae corporis iusto delectus vel libero reprehenderit ullam sequi, voluptatibus eligendi impedit iure temporibus nihil? Inventore vero perspiciatis itaque labore est accusantium. Deleniti dolor eius explicabo eveniet! Rem, sapiente dolor maxime corporis, quasi placeat similique qui consequuntur magni assumenda, quae a ipsa!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae corporis iusto delectus vel libero reprehenderit ullam sequi, voluptatibus eligendi impedit iure temporibus nihil? Inventore vero perspiciatis itaque labore est accusantium. Deleniti dolor eius explicabo eveniet! Rem, sapiente dolor maxime corporis, quasi placeat similique qui consequuntur magni assumenda, quae a ipsa!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once('sections/layouts/footer.php') ?>