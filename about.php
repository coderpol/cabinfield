<?php 
// dynamic page title
$page_title="About Page";

// include header 
include_once('sections/layouts/header.php') 
?>


<!-- header banner section starts  -->
<div class="header-banner image-banner clearfix" style="background-image: url('images/header-banner/about-us.png'); background-position: center right;">
    <div class="dark-gradient">
        <div class="container">
            <div class="row">
                <!-- breadcrumb area starts  -->
                <div class="col-md-12 breadcrumb-area">
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
                <!-- breadcrumb area ends  -->
                
                <!-- banner text starts  -->
                <div class="col-md-8 banner-text">
                    <h1 class="heading">Welcome to<br/>Cabinfield</h1>
                </div>
                <!-- banner text ends  -->
            </div>
        </div>
    </div>
</div>
<!-- header banner section ends  -->

<!-- display board section starts -->
<div class="display-board about-display text-on-top mt-5 mb-0 clearfix">
    <div class="container">
        <div class="row">
            <!-- display area  -->
            <div class="col-md-12 display-area">
                <!-- single display  -->
                <div class="display clearfix">
                    <figure class="col-md-6 col-12 display-image">
                        <img src="images/display/about-1.png" alt="">
                    </figure>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3><span>Our</span> Story</h3>
                        </header>
                        <p>On a family trip through the American heartland, we stumbled upon a treasure trove. Tucked in the charming hills and valleys of Ohio, Indiana, and Pennsylvania, we discovered the shops of Amish craftsmen. Enthralled by their exquisite creations, we were sold.</p>
                        <p>Since 2005, our family-owned business has partnered with the finest Amish artisans for high-quality, custom furnishings that are as unique as the people they serve. Our relationship with the craftsmen affords you the furniture you love…. minus the hefty price tag. We’re passionate about bringing you pieces you can purchase confidently, display proudly, and cherish eternally.</p>
                    </article>
                </div>
                <!-- single display ends -->
                
                <!-- single display start -->
                <div class="display clearfix">
                    <figure class="col-md-6 col-12 display-image">
                        <img src="images/display/about-1.png" alt="">
                    </figure>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3><span>Handcrafted</span> with Love</h3>
                        </header>
                        <p>Visit the home of Amish artisans and you’ll discover some of the most skilled craftsmen in the country. For generations, the Amish have been creating heirloom furniture renowned for its meticulous craftsmanship, flawless construction, and timeless appeal. While much of today’s furniture is mass-produced and isn’t built to last, the Amish take a personal approach, carefully selecting the materials and handcrafting each piece to withstand the test of time. Woodworking is an integral part of the Amish culture, and their values of authenticity and integrity are imbued into each of their creations.</p>
                    </article>
                </div>
                <!-- single display ends -->
                
                <!-- single display start -->
                <div class="display clearfix">
                    <figure class="col-md-6 col-12 display-image">
                        <img src="images/display/about-3.png" alt="">
                    </figure>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3><span class="break-on-pc">Eco-Friendly,</span> You-Friendly</h3>
                        </header>
                        <p>Cabinfield is proud to bring you inspired designs that are not only good for you, but good for the environment too. Authentic Amish furniture is crafted from sustainably harvested, locally-sourced wood, with a low-VOC varnish to finish it off in the healthiest way possible.</p>
                        <p>We also offer outdoor furniture made of recycled materials. These environmentally smart materials are strong and are designed to resist water, fungi, insects, stains, fading, and scratches. Look for this Eco-Friendly Optimized logo on products using innovative Green technology.</p>
                    </article>
                </div>
                <!-- single display ends -->
            </div>
        </div>
    </div>
</div>

<div class="section video-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 video-container">
                <video class="responsive" width="800" height="600" autoplay loop muted>
                    <source src="https://www.cabinfield.com/video/viztech.mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<!-- choice points with icons area starts  -->
<div class="section choice-points about-choice smaller with-counter clearfix">
    <div class="container">
        <div class="row">
            <header class="col-md-12 section-title text-center">
                <h2><span>Your furniture success</span> story begins here.</h2>
            </header>
            <!-- point area  -->
            <div class="col-md-12 points-area">
                <!-- .single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="empty-wallet"></i>
                    </div>
                    <h3>Select your treasure of choice.</h3>
                </div>
                <!-- single point ends -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="search-status"></i>
                    </div>
                    <h3>Order your free swatch samples.</h3>
                </div>
                <!-- single point ends -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="quote-down"></i>
                    </div>
                    <h3>Customize your dimensions, wood species, stain color, and more.</h3>
                </div>
                <!-- single point ends -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="layer"></i>
                    </div>
                    <h3>Place your order by providing payment with check or card.</h3>
                </div>
                <!-- single point ends -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="bag"></i>
                    </div>
                    <h3>Your furniture will be carefully handcrafted and then shipped to your home.</h3>
                </div>
                <!-- single point ends -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="format-square"></i>
                    </div>
                    <h3>Take pleasure in the craftsmanship of your unique and beautiful piece for years to come.</h3>
                </div>
                <!-- single point ends -->
            </div>
            
            <div class="col-md-12 text-center action-area mb-5">
                <a href="product-listing.php" class="btn btn-primary btn-large shadow mobile-full">Shop Now</a>
            </div>
        </div>
    </div>
</div>
<!-- choice points with icons area ends  -->

<!-- call to action banner area starts  -->
<div class="cta-banner clearfix">
    <div class="container">
        <div class="row">
            <section class="col-md-12 banner home-cta">
                <h3>Cabinfield Cares.</h3>
                <p>With rapid response time and exceptional support, we make the buying process a real pleasure—from start to finish. Our support staff is eager to assist you and to answer your questions.</p>
                <p>Email us at <a href="mailto:service@cabinfield.com">service@cabinfield.com</a> or call <a href="tel:866-450-WOOD(9663)">866-450-WOOD (9663)</a> during business hours and see for yourself what makes Cabinfield’s service a cut above the rest.</p>
            </section>
        </div>
    </div>
</div>
<!-- call to action banner area ends  -->

<!-- testimonial area starts  -->
<div class="testimonial-area mb-5 clearfix">
    <div class="row">
        <div class="container">
            <div class="col-md-12 section-title text-center">
                <h3><span>Trusted by</span> Thousands</h3>
            </div>
        </div>
        <?php include_once('sections/testimonial-slider.php') ?>
    </div>
</div>
<!-- testimonial area ends   -->


<!-- include the footer area  -->
<?php include_once('sections/layouts/footer.php') ?>