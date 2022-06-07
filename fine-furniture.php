<?php 
$page_title="Fine Furniture"; // dynamic page title for every page

// include header
include_once('sections/layouts/header.php') 
?>

<!-- Big banner of the page  starts -->
<div class="header-banner clearfix mb-5" style="background-image: url('images/header-banner/fine-furniture.png');">
    <div class="blue-gradient">
        <div class="container">
            <div class="row">
                <nav class="col-md-12 breadcrumb-area" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                        <li class="active">Fine Furniture</li>
                    </ol>
                </nav>
                <div class="col-md-8 banner-text">
                    <h1 class="heading">Fine Furniture</h1>
                    <a href="#" class="btn btn-white">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Big banner of the page  ends -->

<!-- The product category display area  -->
<div class="display-board mb-5 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 display-area">
                <!-- one category display  -->
                <div class="display clearfix">
                    <figure class="col-md-6 col-12 display-image">
                        <img src="images/display/bedrooms.png" alt="">
                    </figure>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3>Bedrooms</h3>
                        </header>
                        <p>Discover heirloom quality Fine Furniture and more in Amish bedroom furniture collections featuring superior construction in styles such as Mission, Contemporary, Traditional and more! Solid wood living room.</p>
                        
                        <a href="#" class="btn btn-primary btn-large">Shop Now</a>
                    </article>
                </div>
                <!-- one category display  ends-->
                
                <!-- one category display  -->
                <div class="display clearfix">
                    <figure class="col-md-6 col-12 display-image">
                        <img src="images/display/living-rooms.png" alt="">
                    </figure>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3>Living Room & Entertainment</h3>
                        </header>
                        <p>Introduce a rural warmth and add texture, color, and character to your space. Designed by nature, rustic furniture is as authentic as it gets.</p>
                        
                        <a href="#" class="btn btn-primary btn-large">Shop Now</a>
                    </article>
                </div>
                <!-- one category display  ends-->
                
                <!-- one category display  -->
                <div class="display clearfix">
                    <figure class="col-md-6 col-12 display-image">
                        <img src="images/display/dining.png" alt="">
                    </figure>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3>Kitchen & Dining Room</h3>
                        </header>
                        <p>Absorb nature’s beauty and connect with the great outdoors. Your outdoor space will become your favorite place with Amish outdoor furniture that is both durable and eco-friendly.</p>
                        
                        <a href="#" class="btn btn-primary btn-large">Shop Now</a>
                    </article>
                </div>
                <!-- one category display  ends-->
                
                <!-- one category display  -->
                <div class="display clearfix">
                    <figure class="col-md-6 col-12 display-image">
                        <img src="images/display/office.png" alt="">
                    </figure>
                    <article class="col-md-6 col-12 display-text">
                        <header class="section-title">
                            <h3>Office</h3>
                        </header>
                        <p>Discover heirloom quality Fine Furniture and more in Amish bedroom furniture collections featuring superior construction in styles such as Mission, Contemporary, Traditional and more! Solid wood living room.</p>
                        
                        <a href="#" class="btn btn-primary btn-large">Shop Now</a>
                    </article>
                </div>
                <!-- one category display  ends-->
            </div>
        </div>
    </div>
</div>

<!-- Includes the footer area -->
<?php include_once('sections/layouts/footer.php') ?>