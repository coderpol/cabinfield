<?php
// dynamic page title 
$page_title = "Testimonials - No result";

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
                
                <div class="search-area">
                    <form action="/search" class="searchform">
                        <input type="search" class="searchbar" name="testimonial" id="testimonial" placeholder="Search Testimonials">
                        <input type="submit" class="search_submit">
                    </form>
                </div>

                <p>Since our inception in 2005, we’ve built an unshakeable reputation of trust and confidence. Cabinfield is legendary for its unwavering integrity, exceptional customer service, and pleasurable shopping experience. </p>
                
                <div class="heading-16 mb-15">
                    <h3>But don’t just take it from us. </h3>
                </div>

                <p>Hear it straight from our customers and see for yourself why Cabinfield is your premier source for fine Amish furnishings you’ll delight in for years to come.</p>
            </div>
            <div class="col-md-2">
                <figure class="figure authized-seal">
                    <img src="images/seal-of-approval.svg" alt="">
                </figure>
            </div>
            <!-- testimonial area starts  -->
            <div class="col-md-12 quotation-area">
                <div class="result-area">
                    <h2>We’re sorry, we didn’t find a match.<br>Maybe try another search?</h2>
                </div>
            </div>
            <!-- testimonial area ends  -->
        </div>
    </div>
</div>


<!-- footer area -->
<?php include_once('sections/layouts/footer.php') ?>