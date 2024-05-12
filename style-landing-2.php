<?php 
$page_title="Style Landing - V2"; // dynamic page title for every page

// include header
include_once('sections/layouts/header.php') 
?>

<!-- Big banner of the page  starts -->
<div class="header-banner clearfix mb-100 mobile-mb-55 " style="background-image: url('images/header-banner/amish.png');">
    <div class="no-gradient">
        <div class="container">
            <div class="row">
                <nav class="col-md-12 breadcrumb-area" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                        <li><a href="#">Fine Furniture</a></li>
                        <li class="active">Office</li>
                    </ol>
                </nav>
                <div class="col-md-8 banner-text text-start">
                    <h1 class="heading">Amish Dining Room <br>& Kitchen Furniture</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipiscing</a> elit. Sed do eiusmod tempor <a href="#">incididunt ut</a> labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <a href="#">exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in <a href="#">voluptate velit esse cillum dolore</a> eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Big banner of the page  ends -->

<!-- collection display area  -->
<div class="section page-con products-section clearfix">
    <div class="container">
        <div class="row bottom-divider">
            <div class="col-lg-3 col-md-3 page-sidebar mb-60 accordion accordion-flush" id="sorting">
                <div class="accordion-item sorting-box ">
                    <div class="accordion-header heading-18" id="sorting-heading-1">
                        <h4 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sorting-collapse-1" aria-expanded="false" aria-controls="sorting-collapse-1"><a href="#">Shop By Furniture Type:</a></h4>
                    </div>
                    <div class="accordion-collapse collapse" id="sorting-collapse-1" aria-labelledby="customizations-heading-1" data-bs-parent="#sorting">
                        <ul class="small-dot sort-listing"  >
                            <li><a href="#">Dining Room Sets</a></li>
                            <li><a href="#">Dining Tables</a></li>
                            <li><a href="#">Dining Chairs, Benches & Bar Stools</a></li>
                            <li><a href="#">Pie Safes, Cabinets & Cupboards</a></li>
                            <li><a href="#">Hutches & Buffets</a></li>
                            <li><a href="#">Home Bars & Wine Rack Buffets</a></li>
                            <li><a href="#">Kitchen Islands</a></li>
                            <li><a href="#">Breakfast Nooks</a></li>
                        </ul>
                    </div>
                </div>

                <div class="accordion-item sorting-box">
                    <div class="accordion-header heading-18" id="sorting-heading-2">
                        <h4 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sorting-collapse-2" aria-expanded="false" aria-controls="sorting-collapse-2"><a href="#">Shop By Style:</a></h4>
                    </div>

                    <div class="accordion-collapse collapse" id="sorting-collapse-2" aria-labelledby="customizations-heading-2" data-bs-parent="#sorting">
                        <ul class="small-dot sort-listing">
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Traditional</a></li>
                            <li><a href="#">Contemporary</a></li>
                            <li><a href="#">Art Deco</a></li>
                            <li><a href="#">Legacy World</a></li>
                            <li><a href="#">Eclectic</a></li>
                            <li><a href="#">Live Edge</a></li>
                            <li><a href="#">Farmhouse Elegance</a></li>
                            <li><a href="#">Reclaimed Barnwood</a></li>
                            <li><a href="#">Prime Value Dining Rooms</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-item sorting-box">
                    <div class="accordion-header heading-18" id="sorting-heading-3">
                        <h4 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sorting-collapse-3" aria-expanded="false" aria-controls="sorting-collapse-3"><a href="#">Shop By Quick Ship:</a></h4>
                    </div>
                    <div class="accordion-collapse collapse" id="sorting-collapse-3" aria-labelledby="customizations-heading-3" data-bs-parent="#sorting">
                        <ul class="small-dot sort-listing">
                            <li><a href="#">Quick Ship Dining Sets</a></li>
                            <li><a href="#">Quick Ship Dining Tables</a></li>
                            <li><a href="#">Quick Ship Dining Chairs & Seating</a></li>
                            <li><a href="#">Quick Ship Hutches and Buffets</a></li>
                            <li><a href="#">Quick Ship Kitchen Islands</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 main-content">
                <div class="row">
                    <!-- <div class="section-title small mb-4">
                        <h2>Shop by Furniture Type</h2>
                    </div> -->
                    <!-- The "type-c" class is for the layout  -->
                    <div class="products-area type-c">
                        <!-- product collection  -->
                        <div class="product">
                            <figure>
                                <a href="#">
                                    <img src="images/products/type-a/type-1a.png" alt="">
                                </a>
                            </figure>
                                
                            <h4><a href="#">Sewing Cabinets & Cutting Tables</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam do eiusmod.</p> 
                        </div>
                        <!-- product collection ends -->
                        
                        <!-- product collection  -->
                        <div class="product">
                            <figure>
                                <a href="#">
                                    <img src="images/products/type-a/type-1b.png" alt="">
                                </a>
                            </figure>
                                
                            <h4><a href="#">Sewing Cabinets & Cutting Tables</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam do eiusmod.</p> 
                        </div>
                        <!-- product collection ends -->
                        
                        <!-- product collection  -->
                        <div class="product">
                            <figure>
                                <a href="#">
                                    <img src="images/products/type-a/type-1c.png" alt="">
                                </a>
                            </figure>
                                
                            <h4><a href="#">Sewing Cabinets & Cutting Tables</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam do eiusmod.</p> 
                        </div>
                        <!-- product collection ends -->
                        
                        <!-- product collection  -->
                        <div class="product">
                            <figure>
                                <a href="#">
                                    <img src="images/products/type-a/type-1d.png" alt="">
                                </a>
                            </figure>
                                
                            <h4><a href="#">Sewing Cabinets & Cutting Tables</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam do eiusmod.</p> 
                        </div>
                        <!-- product collection ends -->
                        
                        <!-- product collection  -->
                        <div class="product">
                            <figure>
                                <a href="#">
                                    <img src="images/products/type-a/type-1e.png" alt="">
                                </a>
                            </figure>
                                
                            <h4><a href="#">Sewing Cabinets & Cutting Tables</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam do eiusmod.</p> 
                        </div>
                        <!-- product collection ends -->
                        
                        <!-- product collection  -->
                        <div class="product">
                            <figure>
                                <a href="#">
                                    <img src="images/products/type-a/type-1f.png" alt="">
                                </a>
                            </figure>
                                
                            <h4><a href="#">Sewing Cabinets & Cutting Tables</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam do eiusmod.</p> 
                        </div>
                        <!-- product collection ends -->
                        
                        <!-- product collection  -->
                        <div class="product">
                            <figure>
                                <a href="#">
                                    <img src="images/products/type-a/type-1g.png" alt="">
                                </a>
                            </figure>
                                
                            <h4><a href="#">Sewing Cabinets & Cutting Tables</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam do eiusmod.</p> 
                        </div>
                        <!-- product collection ends -->
                        
                        <!-- product collection  -->
                        <div class="product">
                            <figure>
                                <a href="#">
                                    <img src="images/products/type-a/type-1h.png" alt="">
                                </a>
                            </figure>
                                
                            <h4><a href="#">Sewing Cabinets & Cutting Tables</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam do eiusmod.</p> 
                        </div>
                        <!-- product collection ends -->
                    </div>
                </div>

            </div>
        </div>

        <div class="row bottom-divider">
            <!-- section title  -->
            <header class="col-md-12 section-title small">
                <h3><a href="#">Shop By Style</a></h3>
            </header>
            <!-- section title ends  -->
            
            <!-- collection area  -->
            <div class="col-md-12  collection-area">
                <!-- single collection  -->
                <a href="collection-landing.php" class="collection">
                    <img src="images/collections/style/style-1.png" alt="">
                    <div class="title">
                        <h4>Mission</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/style/style-2.png" alt="">
                    <div class="title">
                        <h4>Traditional</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/style/style-3.png" alt="">
                    <div class="title">
                        <h4>Contemporary</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/style/style-4.png" alt="">
                    <div class="title">
                        <h4>Legacy World</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/style/style-5.png" alt="">
                    <div class="title">
                        <h4>Art Deco</h4>
                    </div>
                </a>
                <!-- single collection -->
                <!-- single collection  -->
                <a href="collection-landing.php" class="collection">
                    <img src="images/collections/style/style-6.png" alt="">
                    <div class="title">
                        <h4>Eclectic</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/style/style-7.png" alt="">
                    <div class="title">
                        <h4>Live Edge</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/style/style-8.png" alt="">
                    <div class="title">
                        <h4>Farmhouse Elegance</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/style/style-9.png" alt="">
                    <div class="title">
                        <h4>Reclaimed Barnwood</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/style/style-10.png" alt="">
                    <div class="title">
                        <h4>Prime Value Dining Room</h4>
                    </div>
                </a>
                <!-- single collection -->
            </div>
        </div>

        <div class="row bottom-divider">
            <!-- section title  -->
            <header class="col-md-12 section-title small">
                <h3><a href="#">Shop By Quick Ship</a></h3>
            </header>
            <!-- section title ends  -->
            
            <!-- collection area  -->
            <div class="col-md-12  collection-area image_padding">
                <!-- single collection  -->
                <a href="collection-landing.php" class="collection">
                    <img src="images/collections/ship/ship-1.jpg" alt="">
                    <div class="title">
                        <h4>Quick Ship Dining Room Sets</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/ship/ship-2.jpg" alt="">
                    <div class="title">
                        <h4>Quick Ship Dining Tables</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/ship/ship-3.jpg" alt="">
                    <div class="title">
                        <h4>Quick Ship Dining Chairs & Seating</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/ship/ship-4.jpg" alt="">
                    <div class="title">
                        <h4>Quick Ship Hutches & Buffets</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/ship/ship-5.jpg" alt="">
                    <div class="title">
                        <h4>Quick Ship Kitchen Islands</h4>
                    </div>
                </a>
                <!-- single collection -->
                
                <!-- single collection ends -->
                <a href="collection-landing.php"  class="collection">
                    <img src="images/collections/ship/ship-5.jpg" alt="">
                    <div class="title">
                        <h4>Shop By Style</h4>
                    </div>
                </a>
                <!-- single collection -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 textarea mb-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>

<!-- include the footer  -->
<?php include_once('sections/layouts/footer.php') ?>