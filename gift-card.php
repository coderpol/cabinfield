<?php 
$page_title="Gift Card";
include_once('sections/layouts/header.php') 
?>


<?php include_once('sections/header-area.php') ?>

<div class="breadcrum-section">
    <div class="container">
        <div class="row">
            <nav class="col-md-12 breadcrumb-area" aria-label="breadcrumb">
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li>GIFT IT!</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="section clearfix payment-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3 section-title small">
                <h3>Purchase Gift Card</h3>
            </div>
        </div>
        <form action="#" class="row cabinform gift-form">
            <div class="col-md-4">
                <div class="row form-line">
                    <div class="col-md-12">
                        <label for="" class="form-label">Recipient’s name</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Recipient’s name" required>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-md-12">
                        <label for="" class="form-label">Recipient’s email address</label>
                        <input type="email" class="form-control" placeholder="" aria-label="Recipient’s email address" required>
                    </div>
                </div>
                <div class="row form-line">
                    <div class="col-md-12">
                        <label for="" class="form-label">Re-type recipient’s email address</label>
                        <input type="email" class="form-control" placeholder="" aria-label="Re-type recipient’s email address" required>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-4">
                <div class="row form-line">
                    <div class="col-12">
                        <label for="" class="form-label">Message</label>
                        <textarea class="form-control" id="notes" rows="9"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 card gift-card">
                <div class="card-body shadow form-line">
                    <label for="" class="form-label">Gift certificate amount:</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">$</span>
                        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <span class="form-text">(enter amount between $5.00-$10,000.00)</span>
                    <hr class="thin-border">
                    <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="section page-content">
    <div class="container">
        <div class="row work-points-section">
            <div class="col-md-12 text-center section-title small">
                <h3>How it Works</h3>
            </div>
            <?php
                for($i=1;$i<4;$i++){
            ?>
            <div class="col-md-4 work-point">
                <div class="icon">
                    <img src="images/work-point.svg" alt="">
                </div>
                <h4>How it Works</h4>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. Lorem ipsum is.</p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="section page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title small">
                    <h3>View Balance</h3>
                    <p>To view the balance of an existing Gift Certificate enter its code here:</p>
                </div>
                <form action="#" class="cabinform balanceform">
                    <div class="row form-line">
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="" aria-label="Recipient’s name" required>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary btn-block">View Balance</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once('sections/layouts/footer.php') ?>