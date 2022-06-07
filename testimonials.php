<?php 
// dynamic page title 
$page_title="Testimonials";

// include header 
include_once('sections/layouts/header.php') 
?>

<!-- breadcrumb section starts  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="#">Help Center</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends  -->

<div class="section clearfix page-content testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 text-dark-color pr-5">
                <!-- page title  -->
                <header class="section-title small">
                    <h1>Testimonials</h1>
                </header>
                <!-- page title ends -->
                
                <p>We at Cabinfield are very proud of our Amish craftsmen whose skill in workmanship and artistry in design work together to create products fine enough to grace the most distinguished homes. From details that include such care as mortise-and-tenon joinery, dovetailed drawers, stretcher-based construction on chairs, inset screws, extra coatings on hand-applied, smooth-as-glass finishes, and so much more, our craftsmen  truly exemplify America’s best.</p>
                
                <p>And although we make every effort to inform our visitors about our fine-quality, Amish-handcrafted products and superior customer service, it’s the straight-from-the-customer comments we receive that speak most eloquently.</p>
                <p>Please take a few minutes to read through some of our customer’s e-mails and find out for yourself what others have already discovered in value, quality, and satisfaction when they choose Cabinfield’s Amish-made products. Give us a try. We feel certain you’ll agree.</p>
            </div>
            <div class="col-md-2">
                <figure class="figure authized-seal">
                    <img src="images/seal-of-approval.svg" alt="">
                </figure>
            </div>
            <!-- testimonial area starts  -->
            <div class="col-md-12 quotation-area">
                <?php 
                // repeat the testimonial 5 times 
                    for($i=1;$i<5;$i++){
                ?>
                <div class="quotation">
                    <!-- the quote will be going here  -->
                    <blockquote>
                    I received my Squanto Bed and it is perfect in every way. The stain and style matched my other furniture beautifully and I can't say enough good things about the craftmanship of the furniture and the people that I dealt with from placing the order to delivery. Everyone was very helpful with questions I had and I believe went out of their way to accommodate my special 
                    </blockquote>
                    
                    <!-- the author details  -->
                    <p>
                        <!-- name of the author  -->
                        <span class="author">Samantha William <i class="fa-solid fa-circle-check"></i></span>
                        <!-- address of the author  -->
                        <span class="address">Ocean Shores, WA March 7, 2018</span>
                    </p>
                    <p class="history">Products Ordered: <a href="#">Madera Amish Recliner Loveseat</a>, <a href="#">Madera Amish Loveseat</a></p>
                </div>
                <?php } ?>
            </div>
            <!-- testimonial area ends  -->
        </div>
    </div>
</div>


<!-- footer area -->
<?php include_once('sections/layouts/footer.php') ?>