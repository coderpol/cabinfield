<?php 
$page_title="Product Lisitng - V1";
include_once('sections/layouts/header.php') 
?>


<?php include_once('sections/header-area.php') ?>

<div class="section page-content brand-gradient page-highlight-area">
    <div class="container">
        <div class="row">
            <nav class="col-md-12 breadcrumb-area" aria-label="breadcrumb">
                <ol class="breadcrumb dark">
                    <li><a href="home.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="#">Bedroom</a></li>
                    <li><a href="#">Shop Style</a></li>
                    <li><a href="#">Shop Collection</a></li>
                    <li class="active">Product Listing</li>
                </ol>
            </nav>
            
            <div class="col-md-12 highlight-text">
                <h2 class="highlight-title">Timelessly trendy, our contemporary Amish dining chairs combine heirloom quality craftsmanship with modern chair designs.</h2>
                <p>Customize your Amish dining room set with hardwood selections, seat styles and attractive upgrade options. Our extensive collection includes upholstered dining chairs, ladder back chairs, Parson’s chairs, Amish bar stools and more. Heirloom quality Amish dining room furniture with contemporary allure.</p>
            </div>
        </div>
    </div>
</div>


<div class="section page-content product-listing-area">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-3 section-title small">
                <h3><span>Kennet</span> Series</h3>
            </div>
            <div class="col-md-9 text-end">
                <ul class="d-flex justify-content-end filter-buttons">
                    <li class=""><span id="filter-toggle" class="btn btn-white shadow opened"><i class="fa-solid fa-sliders rotate-90"></i> <span>Hide</span> Filter</span></li>
                    <li class="clearfix sort-by">
                        <span class="float-start">Sort By:</span>
                        <form action="#" class="float-end cabinform">
                            <select class="form-select form-select-sm btn btn-white shadow" aria-label=".form-select-sm example">
                                <option selected>High to Low</option>
                                <option value="1">Low to hight</option>
                            </select>
                        </form>
                    </li>
                    <li><a href="#" class="btn btn-primary btn">Shop by Furniture Piece</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <aside class="col-md-3 page-sidebar accordion-area" id="filter-area">
                <form action="#" class="accordion accordion-flush cabinform filter-form" id="filters">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="filter-heading-1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapse-1" aria-expanded="false" aria-controls="filter-collapse-1">
                            Furniture Type
                            </button>
                        </h2>
                        <div id="filter-collapse-1" class="accordion-collapse collapse show" aria-labelledby="filter-heading-1" data-bs-parent="#filters">
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
                        <h2 class="accordion-header" id="filter-heading-2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapse-2" aria-expanded="false" aria-controls="filter-collapse-2">
                            Collection
                            </button>
                        </h2>
                        <div id="filter-collapse-2" class="accordion-collapse collapse show" aria-labelledby="filter-heading-2" data-bs-parent="#filters">
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
                        <h2 class="accordion-header" id="filter-heading-3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapse-3" aria-expanded="false" aria-controls="filter-collapse-3">
                            Style
                            </button>
                        </h2>
                        <div id="filter-collapse-3" class="accordion-collapse collapse show" aria-labelledby="filter-heading-3" data-bs-parent="#filters">
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
            </aside>
            
            <div class="col-md-9 main-content product-listing-area" id="product-listing-area">
                <div class="row listed-product">
                    <div class="col-md-4 product">
                        <figure>
                            <img src="images/products/listing/product-1.png" alt="">
                        </figure>
                        <h3 class="title"><a href="#">Franklin Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <a href="#"><i class="fa-solid fa-heart"></i>Like this product</a>
                        </div>
                    </div>
                    <div class="col-md-4 product">
                        <figure>
                            <img src="images/products/listing/product-2.png" alt="">
                        </figure>
                        <h3 class="title"><a href="#">Charleston Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <a href="#"><i class="fa-solid fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 product">
                        <figure>
                            <img src="images/products/listing/product-3.png" alt="">
                        </figure>
                        <h3 class="title"><a href="#">Prairie Mission Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <span class="availability">Available for 3 sizes</span>
                        <div class="icon">
                            <a href="#"><i class="fa-solid fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 product">
                        <figure>
                            <img src="images/products/listing/product-4.png" alt="">
                        </figure>
                        <h3 class="title"><a href="#">Franklin Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <a href="#"><i class="fa-solid fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 product">
                        <figure>
                            <img src="images/products/listing/product-5.png" alt="">
                        </figure>
                        <h3 class="title"><a href="#">Franklin Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <a href="#"><i class="fa-solid fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 product">
                        <figure>
                            <img src="images/products/listing/product-6.png" alt="">
                        </figure>
                        <h3 class="title"><a href="#">Franklin Amish File Cabinet</a></h3>
                        <p class="details">Product No. FGFH1128</p>
                        <p class="price vertical-middle">starting <span class="value">$1,3,71.00</span></p>
                        <div class="icon">
                            <a href="#"><i class="fa-solid fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <nav class="row text-center pagination-area" aria-label="Product Nagivation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('sections/layouts/footer.php') ?>