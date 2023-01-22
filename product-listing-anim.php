<?php 
$page_title="Product Lisitng - V1"; // dynamic page title for every page

// include header
include_once('sections/layouts/header.php') 
?>

<!--highlighted area starts  -->
<div class="section page-content orange-gradient page-highlight-area">
    <div class="container">
        <div class="row">
            <!-- breadcrumb starts  -->
            <div class="col-md-12 breadcrumb-area">
                <!-- use class "dark" as the color of the breadcrumb is dark  -->
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="bedroom-landing.php">Bedroom</a></li>
                    <li><a href="style-landing.php">Shop Style</a></li>
                    <li><a href="collection-landing.php">Shop Collection</a></li>
                    <li class="active">Product Listing</li>
                </ol>
            </div>
            <!-- breadcrumb ends  -->
            
            <!-- Highlighted text starts  -->
            <div class="col-md-12 highlight-text">
                <h2 class="highlight-title">Timelessly trendy, our contemporary Amish dining chairs combine heirloom quality craftsmanship with modern chair designs.</h2>
                <p>Customize your Amish dining room set with hardwood selections, seat styles and attractive upgrade options. Our extensive collection includes upholstered dining chairs, ladder back chairs, Parson’s chairs, Amish bar stools and more. Heirloom quality Amish dining room furniture with contemporary allure.</p>
            </div>
            <!-- Highlighted text ends  -->
        </div>
    </div>
</div>
<!-- highlight area ends  -->

<!-- product listing area starts  -->
<div class="section page-content product-listing-section">
    <div class="container">
        <!-- The top functional area with buttons -->
        <div class="row mb-2 functional-area no-button">
            <div class="col-md-3 section-title small">
                <h1><span>Outdoor</span> Lounge & Dining Furniture Sets</h1>
            </div>
            <div class="col-md-9 text-end">
                <ul class="filter-buttons">
                    <li class="filter"><span id="filter-toggle" class="btn btn-white shadow opened"><i class="fa-solid fa-sliders rotate-90"></i> <span>Hide</span> Filter</span></li>
                    <li class="clearfix sort-by">
                        <span class="float-start above-tablet">Sort By:</span>
                        <form action="#" class="float-end cabinform">
                            <select class="form-select form-select-sm btn btn-white shadow" aria-label=".form-select-sm example">
                                <option selected>High to Low</option>
                                <option value="1">Low to hight</option>
                            </select>
                        </form>
                    </li>
                    <!-- this one will be automatically hidden if you add .no-button to the parend div  -->
                    <li class="shop-by"><a href="bedroom-landing.php" class="btn btn-primary btn">Shop by Furniture Piece</a></li>
                </ul>
            </div>
        </div>
        <!-- The top functional area with buttons ends -->
        
        <div class="row">
            <!-- filter area  -->
            <div class="col-md-3 page-sidebar accordion-area" id="filter-area">
                <form action="#" class="accordion accordion-flush cabinform filter-form" id="filters">
                    <div class="accordion-item">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapse-1" aria-expanded="false" aria-controls="filter-collapse-1">
                            Furniture Type
                        </button>
                        <div id="filter-collapse-1" class="accordion-collapse collapse show" data-bs-parent="#filters">
                            <div class="accordion-body">
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt11">
                                    <label class="form-check-label" for="opt11">Bedroom Furniture Set</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt12">
                                    <label class="form-check-label" for="opt12">Bed & Headboards</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt13">
                                    <label class="form-check-label" for="opt13">Bedroom Storage Pieces</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt14">
                                    <label class="form-check-label" for="opt14">Storage Chests & boxes</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt15">
                                    <label class="form-check-label" for="opt15">Bedroom Accessories</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt16">
                                    <label class="form-check-label" for="opt16">Bedroom Furniture Set</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt17">
                                    <label class="form-check-label" for="opt17">Quick Ship Bedrooms</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapse-2" aria-expanded="false" aria-controls="filter-collapse-2">
                        Collection
                        </button>
                        <div id="filter-collapse-2" class="accordion-collapse collapse show" data-bs-parent="#filters">
                            <div class="accordion-body">
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt21">
                                    <label class="form-check-label" for="opt21">Kennet</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" checked value="" id="opt22">
                                    <label class="form-check-label" for="opt22">Spring Field</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt23">
                                    <label class="form-check-label" for="opt23">Oldstead</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt24">
                                    <label class="form-check-label" for="opt24">Avenue West</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapse-3" aria-expanded="false" aria-controls="filter-collapse-3">
                        Style
                        </button>
                        <div id="filter-collapse-3" class="accordion-collapse collapse show" data-bs-parent="#filters">
                            <div class="accordion-body">
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" checked value="" id="opt31">
                                    <label class="form-check-label" for="opt31">Mission</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox"  value="" id="opt32">
                                    <label class="form-check-label" for="opt32">Contemporary</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt33">
                                    <label class="form-check-label" for="opt33">Eclectic</label>
                                </div>
                                <div class="form-check clearfix">
                                    <input class="form-check-input" type="checkbox" value="" id="opt34">
                                    <label class="form-check-label" for="opt34">Traditional</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- filter area ends -->
            
            <!-- main product listing area  -->
            <div class="col-lg-9 main-content product-listing-area" id="product-listing-area">
                <div class="row listed-product">
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <div class="blank-product rainbow-border"></div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <div class="blank-product rainbow-border"></div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <div class="blank-product rainbow-border"></div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <div class="blank-product rainbow-border"></div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <div class="blank-product rainbow-border"></div>
                    </div>
                    <!-- single product end -->
                    
                    <!-- single product  -->
                    <div class="col-md-4 product">
                        <div class="blank-product rainbow-border"></div>
                    </div>
                </div>
                
                <!-- pagination area  -->
                <div class="row text-center pagination-area">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="list-of-pre-built-products-v1.php" aria-label="Previous"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="list-of-pre-built-products-v1.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="list-of-pre-built-products-v1.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="list-of-pre-built-products-v1.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="list-of-pre-built-products-v1.php" aria-label="Next"><i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- pagination area ends -->
            </div>
        </div>
    </div>
</div>

<!-- include footer area  -->
<?php include_once('sections/layouts/footer.php') ?>