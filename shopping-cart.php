<?php 
$page_title="Shopping Cart"; // dynamic page title for every page

// include header
include_once('sections/layouts/header.php') 
?>


<!-- shopping cart section  -->
<div class="section clearfix page-content shopping-cart-section mt-4">
    <div class="container">
        <!-- page title  -->
        <div class="row mb-3">
            <div class="col-md-12 section-title small">
                <h3>Shopping Cart</h3>
                <p class="">Ordered for 800001 zip code</p>
            </div>
        </div>
        <!-- page title ends  -->
        
        <!-- shopping items area  -->
        <div class="row shopping-cart-area">
            <div class="col-md-8">
                <!-- one item  -->
                <div class="row cart-item">
                    <figure class="col-md-4 figure">
                        <img src="images/cart/cart-1.png" alt="">
                    </figure>
                    <div class="col-md-5 item-details">
                        <div class="title">
                            <p>Combined Shipping Item</p>
                            <h4><a href="#">Carolina Crown Amish Bed</a></h4>
                        </div>
                        <div class="price">
                            <p>Product Price <span class="value">$2972.00</span></p>
                            <div class="counter">
                                <span class="btn" data-action="decrease">-</span>
                                <input type="number" class="count" value="1"> 
                                <span class="btn" data-action="increase">+</span>
                            </div>
                        </div>
                        <?php 
                            // just keeping a sample code here
                            // $number = 1;
                            // $collapse = true;
                            // include('sections/form/pre-gifting.php'); 
                        ?>
                        <ul class="detail">
                            <li>Wood: <span>Oak</span></li>
                            <li>Oak Stain: <span>Natural</span></li>
                            <li>Upholstery: <span>Standard Fabric</span></li>
                            <li>Standard Fabric: <span>4-10 Dove</span></li>
                        </ul>
                        
                        <!--
                         #just keeping a sample code here
                         
                         <div class="pre-gift-trigger">
                            <p class="trigger">Ordering for a loved one? <span data-bs-toggle="collapse" href="#pre-gift-<?php echo $number; ?>" role="button" aria-expanded="false" aria-controls="collapseExample">Click here</span> to <strong>Gift It!</strong> with a <strong>Cabinfield Virtual Pre-Gifting Card</strong>.</p>
                        </div> -->
                    </div>
                    <div class="col-md-3 action">
                        <p class="price-title">Extended Price</p>
                        <div class="price-details">
                            <span class="current">$1,270.00</span>
                        </div>
                        <div class="buttons">
                            <button class="btn btn-empty btn-block cart-item-remover"><i class="fa-solid fa-trash-can"></i> Remove</button>
                            <button class="btn btn-primary btn-block"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                        </div>
                    </div>
                </div>
                <!-- one item ends -->
                
                <!-- one item  -->
                <div class="row cart-item">
                    <figure class="col-md-4 figure">
                        <img src="images/cart/cart-2.png" alt="">
                    </figure>
                    <div class="col-md-5 item-details">
                        <div class="title">
                            <p>Combined Shipping Item</p>
                            <h4><a href="#">Carolina Crown Amish Bed</a></h4>
                        </div>
                        <div class="price">
                            <p>Product Price <span class="value">$2972.00</span></p>
                            <div class="counter">
                                <span class="btn" data-action="decrease">-</span>
                                <input type="number" class="count" value="2"> 
                                <span class="btn" data-action="increase">+</span>
                            </div>
                        </div>
                        <ul class="detail">
                            <li>Wood: <span>Oak</span></li>
                            <li>Oak Stain: <span>Natural</span></li>
                            <li>Upholstery: <span>Standard Fabric</span></li>
                            <li>Standard Fabric: <span>4-10 Dove</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 action">
                        <p class="price-title">Extended Price</p>
                        <div class="price-details">
                            <span class="old">$1,371.00</span>
                            <span class="current">$1,270.00</span>
                        </div>
                        <div class="buttons">
                            <button class="btn btn-empty btn-block cart-item-remover"><i class="fa-solid fa-trash-can"></i> Remove</button>
                            <button class="btn btn-primary btn-block"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                        </div>
                    </div>
                    <div class="col-12 thanks-note">
                        <p><span class="greeting">Thank you!</span> Your $89.10 savings have been deducted on the ordering page and are reflected here in your Shopping Cart.</p>
                    </div>
                </div>
                <!-- one item ends -->
                
                <!-- one item  -->
                <div class="row cart-item">
                    <figure class="col-md-4 figure">
                        <img src="images/cart/cart-3.png" alt="">
                    </figure>
                    <div class="col-md-5 item-details">
                        <div class="title">
                            <p>Combined Shipping Item</p>
                            <h4><a href="#">Carolina Crown Amish Bed</a></h4>
                        </div>
                        <div class="price">
                            <p>Product Price <span class="value">$2972.00</span></p>
                            <div class="counter">
                                <span class="btn" data-action="decrease">-</span>
                                <input type="number" class="count" value="2"> 
                                <span class="btn" data-action="increase">+</span>
                            </div>
                        </div>
                        <ul class="detail wider">
                            <li>Bed Size: <span>California Kingak</span></li>
                            <li>Nightstand: <span>Open with pullout shelf</span></li>
                            <li>Wood: <span>Oak</span></li>
                            <li>Oak Stain: <span>Natural</span></li>
                            <li>Mirror: <span>Mirror</span></li>
                            <li>Underbed storage: <span>Side Drawers (3drawers per side)</span></li>
                            <li>Drawer Slides: <span>OFull-Extension Soft-close Undermount Slides</span></li>
                            <li>Other Hardware Choices for Drawers: <span>Standard</span></li>
                            <li>Other Hardware Choices for Doors: <span>Standard</span></li>
                            <li>Extra Nightstand: <span>3 drawer nightstand</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 action">
                        <p class="price-title">
                            Extended Price
                            <span>$1371.00</span>
                        </p>
                        <div class="buttons">
                            <button class="btn btn-empty btn-block cart-item-remover"><i class="fa-solid fa-trash-can"></i> Remove</button>
                            <button class="btn btn-primary btn-block"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                        </div>
                    </div>
                </div>
                <!-- one item ends -->
                
                <!-- one item  -->
                <div class="row cart-item">
                    <div class="col-md-12 only-details">
                        <p>Your savings on combined shipping: <span>$316.17</span></p>
                        <p>Shipping type: <span>Satandard cubside delivery</span> shipping price of the set: <span>$361.20</span></p>
                    </div>
                </div>
                <!-- one item ends -->
                
                <!-- one item  -->
                <div class="row cart-item">
                    <figure class="col-md-4 figure">
                        <img src="images/cart/cart-2.png" alt="">
                    </figure>
                    <div class="col-md-5 item-details">
                        <div class="title">
                            <p>Single Shipping item</p>
                            <h4><a href="#">Carolina Crown Amish Bed</a></h4>
                        </div>
                        <div class="price">
                            <p>Product Price <span class="value">$2972.00</span></p>
                            <div class="counter">
                                <span class="btn" data-action="decrease">-</span>
                                <input type="number" class="count" value="2"> 
                                <span class="btn" data-action="increase">+</span>
                            </div>
                        </div>
                        <ul class="detail">
                            <li>Wood: <span>Oak</span></li>
                            <li>Oak Stain: <span>Natural</span></li>
                            <li>Upholstery: <span>Standard Fabric</span></li>
                            <li>Standard Fabric: <span>4-10 Dove</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 action">
                        <p class="price-title">Extended Price</p>
                        <div class="price-details">
                            <span class="current">$1371.00</span>
                        </div>
                        <p class="price-title">Shipping & Handling</p>
                        <div class="price-details">
                            <span class="current">$10.00</span>
                        </div>
                        <p class="price-title">Extended Price</p>
                        <div class="price-details">
                            <span class="current">$602.00</span>
                        </div>
                        <div class="buttons">
                            <button class="btn btn-empty btn-block cart-item-remover"><i class="fa-solid fa-trash-can"></i> Remove</button>
                            <button class="btn btn-primary btn-block"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                        </div>
                    </div>
                </div>
                <!-- one item ends -->
                
                 <!-- one item  -->
                 <div class="row cart-item">
                    <div class="col-md-12 only-details">
                        <p>Ordering for a loved one?</p>
                        <p><a href="#">Gift It!</a> With a <a href="#">Cabinfield Virtual Pre-Gifting Card</a></p>
                    </div>
                </div>
                <!-- one item ends -->
                
                <!-- one item  -->
                <div class="row cart-item sample-item">
                    <div class="heading-30">
                        <h3>Cabinfield Gift Card</h3>
                    </div>
                    <figure class="col-md-9 figure card-figure">
                        <img src="images/gift/card.png" class="img-responsive" alt="">
                    </figure>
                    <div class="col-md-3 action">
                        <p class="price-title">Subtotal: <span>$1371.00</span></p>
                        <div class="buttons">
                            <button class="btn btn-empty btn-block cart-item-remover"><i class="fa-solid fa-trash-can"></i> Remove</button>
                        </div>
                    </div>
                </div>
                <!-- one item ends -->
                
                <div class="row sample-item">
                    <div class="col-md-12 heading">
                        <h3>Wood Samples</h3>
                    </div>
                    <div class="col-md-9">
                        <ul class="sample-text">
                            <li>Oak / Natural</li>
                            <li>Cherry / OCS 117</li>
                            <li>Rustic Hickory / Natural</li>
                            <li>Hickory / FC 104 Chestnut</li>
                            <li>Oak / OCS 111 Asbury</li>
                            <li>Brown Maple / OCS 104 Seely</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-3 action">
                        <p class="price-title">Subtotal: <span>$55</span></p>
                        <div class="buttons">
                            <button class="btn btn-empty btn-block cart-item-remover"><i class="fa-solid fa-trash-can"></i> Remove</button>
                            <button class="btn btn-primary btn-block"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- summary card area  -->
            <div class="col-md-4 card summary-card">
                <!-- card start  -->
                <div class="card-body shadow mb-4">
                    <h3 class="card-title">Order Summary</h3>
                    <ul class="list-group summary-list">
                        <li class="list-item">Items: <span class="value">$1,321.00</span></li>
                        <li class="list-item">Shipping & handling: <span class="value">$135.00</span></li>
                        <li class="list-item">Savings on combined shipping: <span class="value"> - $128.24</span></li>
                        <li class="list-item">Total before tax: <span class="value">$1,371.00</span></li>
                        <li class="list-item">Estimated Sales Tax: 
                        <button class="tooltip-button" data-bs-toggle="tooltip" title="Since our inception in 2005, we’ve built an unshakeable reputation of trust and confidence."><i class="fa-solid fa-circle-question blue"></i></button>
                         <span class="value">$0.00</span></li>
                        <li class="list-item total">Extended price: <span class="value">$1,371.00</span></li>
                        <!-- <li class="list-item">Due today: <span class="value">$0.00</span></li> -->
                    </ul>
                    <button type="submit" class="btn btn-primary btn-block">Continue to Payment</button>
                </div>
                <!-- card ends  -->
                
                <!-- Calculate shipping form  -->
                <div class="card-body shadow">
                    <h4 class="card-title">Calculate Shipping</h4>
                    <form action="#">
                        <div class="row form-line">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Enter Zip" aria-label="Calculate Shipping" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Calculate</button>
                    </form>
                </div>
                <!-- Calculate shipping form ends -->
            </div>
             <!-- summary card area ends -->
        </div>
    
    </div>
</div>

<!-- include footer area  -->
<?php include_once('sections/layouts/footer.php') ?>