<?php 
$page_title="Checkout Info"; // dynamic page title for the page

// include the <head></head>
include_once('sections/layouts/header.php') 
?>

<!-- breadcrubm section  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <!-- Class "reverse" for back direction   -->
                <ol class="breadcrumb dark reverse">
                    <li><a href="#">Back</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrubm section ends -->

<!-- .page-content starts  -->
<div class="section clearfix page-content">
    <div class="container">
        <!-- page heading  -->
        <div class="row">
            <header class="col-md-12 section-title medium mb-3">
                <h3>Gift It!</h3>
            </header>
        </div>
        <!-- page heading ends -->
        
        <!-- main content area  -->
        <div class="row gift-section">
            <div class="col-md-12">
                <p>Want a fabulous, unforgettable way to wish a happy birthday, send a wedding gift or express your appreciation?<br/>
                Many of our customers choose handcrafted Cabinfield pieces for a much-loved gift.</p>
                <p>We offer two <strong>Gift It!</strong> options:</p>
                <div class="section-sub-title">
                    <h4>1. The Cabinfield Gift Certificate</h4>
                </div>
                
                <p>Give a <a class="link link-primary" href="#"><strong>Cabinfield Gift Certificate*</strong></a> for any amount from <strong>$5</strong> to <strong>$5,000</strong>!<br>
                Everyone loves choosing their own favorite woods, stains, and styles.<br>
                Purchase a Gift Certificate and your recipient can use the certificate towards their very own personalized order.</p>
                
                <div class="mt-4"><a class="btn btn-primary btn-medium" href="#">Purchase Gift Certificate</a></p>

                <div class="section-sub-title">
                    <h4>2. A Cabinfield Handcrafted Gift with Virtual Pre-Gift Email</h4>
                </div>

                <p>Do you already have a specific handcrafted Cabinfield gift in mind?<br>Order it for your loved one and <strong>Gift It!</strong> with our <a class="mask orange" href="#" data-bs-toggle="modal" data-bs-target="#gift_card_modal"><strong>Virtual Pre-Gifting option</strong></a>.</p>

                <h4 class="article-subtitle"><strong>What’s a Virtual Pre-Gift?</strong></h4>
                <p>Due to the unique, individually handcrafted nature of our products, the heirloom-quality furniture or other exceptional item you choose for them may not be ready on the day of the event; however, when you choose this thoughtful option, your own personal note is delivered via email on that special day informing the recipient that their very distinctive gift is being created just for them and will soon be on its way!</p>

                <h4 class="article-subtitle"><strong>How does Virtual Pre-Gifting work?</strong></h4>
                <ul>
                    <li>Place your order</li>
                    <li>Contact us at sales@cabinfield or 866-450-9663 and request Virtual Pre-Gifting</li>
                    <li>We will email your personalized Note to the recipient. The note includes a picture of the gift being built.</li>
                </ul>
                <p class="small">* Recipients unable to receive HTML email will receive a text-only version of the email Gift Certificate or Virtual Pre-Gifting note.</p>
            </div>
        </div>
    </div>
</div>
<?php 
// include the modal you want to use
include_once('sections/modal/gift-certificate.php'); 
?>
<!-- include footer  -->
<?php include_once('sections/layouts/footer.php') ?>