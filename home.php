<?php 
$page_title="Homepage"; // dynamic page title for every page

// include header
include_once('sections/layouts/header.php') 
?>

<!-- Big banner of the page  starts -->
<div class="header-banner home-banner clearfix" style="background-image: url('images/header-banner/banner-home.jpg');">
    <div class="primary-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-8 banner-text">
                    <h1 class="tagline">Authenticity. Beauty. Craftmanship.</h1>
                    <h2 class="heading">Fine Amish Furniture You'll Treasure for a Lifetime.<br>Indoor & Outdoor Collections</h2>
                    <a href="product-listing.php" class="btn btn-white">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Big banner of the page  ends -->


<!-- Six iconic points area  -->
<div class="choice-points home-choice clearfix">
    <div class="container">
        <div class="row">
            <header class="col-md-12 section-title text-center">
                <h2><span>Cabinfield</span> Your natural choice</h2>
            </header>
            <div class="col-md-12 points-area">
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="extensive-collection"></i>
                    </div>
                    <h3>Extensive Collection</h3>
                    <p>From MIssion to rustic and everything in between, discover the styles you’ll love coming home to.</p>
                </div>
                <!-- single point end -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="heirloom-quality"></i>
                    </div>
                    <h3>Heirloom Quality</h3>
                    <p>Handcrafted from solid wood with careful attention to detail, promising years of faithful use.</p>
                </div>
                <!-- single point end -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="affordable-elegance"></i>
                    </div>
                    <h3>Affordable Elegance</h3>
                    <p>Shipped directly to yyou from our Amish artisans, avoding merchandising and inventory costs.</p>
                </div>
                <!-- single point end -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="custom-options"></i>
                    </div>
                    <h3>Custom Options</h3>
                    <p>Customizable features so you get distinct furnishings that reflect your personal style.</p>
                </div>
                <!-- single point end -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="trusted-source"></i>
                    </div>
                    <h3>Trusted Source</h3>
                    <p>National distributor since 2005, with an A+ Better Business Bureau rating and thousands of delighted customers.</p>
                </div>
                <!-- single point end -->
                
                <!-- single point  -->
                <div class="point">
                    <div class="icon">
                        <i class="stellar-service"></i>
                    </div>
                    <h3>Stellar Service</h3>
                    <p>Superior customer service and support for a seamless, stress-free buying experience.</p>
                </div>
                <!-- single point end -->
            </div>
            
            <div class="col-md-12 text-center action-area">
                <a href="about.php" class="btn btn-primary btn-large">Learn more about us</a>
            </div>
        </div>
    </div>
</div>
<!-- Six iconic points area ends -->

<!-- The product category display area  -->
<div class="display-board clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 display-area">
                <!-- one category display  -->
                <div class="display clearfix">
                    <!-- <figure class="col-md-6 col-12 display-image">
                        <img src="images/display/fine-furniture.png" alt="">
                    </figure> -->

                    <div class="col-md-6 col-12 display-image">
                        <div class="display-slider" id="furniture-slider">
                            <div class="slide" id="furniture-1">
                                <img src="images/display/slider/main/furniture-1.png" alt="">
                            </div>
                            <div class="slide" id="furniture-2">
                                <img src="images/display/fine-furniture.png" alt="">
                            </div>
                            <div class="slide" id="furniture-3">
                                <img src="images/display/fine-furniture.png" alt="">
                            </div>
                            <div class="slide" id="furniture-4">
                                <img src="images/display/fine-furniture.png" alt="">
                            </div>
                            <div class="slide" id="furniture-5">
                                <img src="images/display/fine-furniture.png" alt="">
                            </div>
                        </div>
                        <div id="furniture-thumbs" class="slider-thumbs">
                            <div class="thumb" data-slide-target="furniture-1">
                                <img src="images/display/slider/thumbs/slider-1-thumb-1.png" alt="">
                            </div>
                            <div class="thumb" data-slide-target="furniture-2">
                                <img src="images/display/slider/thumbs/slider-1-thumb-2.png" alt="">
                            </div>
                            <div class="thumb" data-slide-target="furniture-3">
                                <img src="images/display/slider/thumbs/slider-1-thumb-3.png" alt="">
                            </div>
                            <div class="thumb" data-slide-target="furniture-4">
                                <img src="images/display/slider/thumbs/slider-1-thumb-4.png" alt="">
                            </div>
                            <div class="thumb" data-slide-target="furniture-5">
                                <img src="images/display/slider/thumbs/slider-1-thumb-5.png" alt="">
                            </div>
                        </div>
                    </div>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3><a href="#"><span>Fine</span> Furniture</a></h3>
                        </header>
                        <p>Design an artisanal backdrop for your unique lifestyle. Our Amish craftsmen are skilled in handcrafting a variety of contemporary, traditional, and Mission style furniture, made in the USA. Follow your heart to the home of your dreams.</p>
                        
                        <a href="product-listing.php" class="btn btn-primary btn-large">Shop Now</a>
                    </article>
                </div>
                <!-- one category display end  -->
                
                <!-- one category display  -->
                <div class="display clearfix">
                    <div class="col-md-6 col-12 display-image">
                        <div class="display-slider" id="slider-rustic">
                            <div class="slide">
                                <img src="images/display/rustic-live-edge.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/display/rustic-live-edge.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/display/rustic-live-edge.png" alt="">
                            </div>
                        </div>
                    </div>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3><a href="#"><span>Rustics</span>  & Live Edge</a></h3>
                        </header>
                        <p>Introduce a rural warmth and add texture, color, and character to your space. Designed by nature, rustic furniture is as authentic as it gets.</p>
                        
                        <a href="product-listing.php" class="btn btn-primary btn-large">Shop Now</a>
                    </article>
                </div>
                <!-- one category display end  -->

                <!-- one category display  -->
                <div class="display clearfix">
                    <div class="col-md-6 col-12 display-image">
                        <div class="display-slider" id="slider-outdoor">
                            <div class="slide">
                                <img src="images/display/outdoor.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/display/outdoor.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="images/display/outdoor.png" alt="">
                            </div>
                        </div>
                    </div>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3><a href="#"><span>Outdoor</span>  Living</a></h3>
                        </header>
                        <p>Absorb nature’s beauty and connect with the great outdoors. Your outdoor space will become your favorite place with Amish outdoor furniture that is both durable and eco-friendly.</p>
                        
                        <a href="product-listing.php" class="btn btn-primary btn-large">Shop Now</a>
                    </article>
                </div>
                <!-- one category display end -->
            </div>
        </div>
    </div>
</div>

<!-- Testimonial slider area  -->
<div class="testimonial-area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title text-center">
                <h3><span>Our Customers</span> Say it Best.</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Slider part is going to be included here  -->
        <?php include_once('sections/testimonial-slider.php') ?>
    </div>
</div>
<!-- Testimonial slider area  ends -->


<!-- The call to action banner starts  -->
<div class="cta-banner clearfix">
    <div class="container">
        <div class="row">
            <section class="col-md-12 banner home-cta">
                <h4>You love beautiful, natural wood. Get inspiration, product news, and promotions to your inbox, so you can eep checking those items off your whishlist.</h4>
                <a href="home.php" class="btn btn-blue">Sign Up for Cabinfield treasures</a>
            </section>
        </div>
    </div>
</div>
<!-- The call to action banner starts  ends-->


<!-- Includes the footer area -->
<?php include_once('sections/layouts/footer.php') ?>