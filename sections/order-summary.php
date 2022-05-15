
<div class="section clearfix mb-5 order-summary-section">
    <div class="container">
        <div class="row">
            <!-- title starts  -->
            <header class="col-md-12 section-title small">
                <h3>Order Summary</h3>
            </header>
            <!-- title ends  -->
            <div class="col-md-9 ordered-items-list">
                <!-- single product item  -->
                <div class="row ordered-item">
                    <figure class="col-md-4 col-12 figure image">
                        <img src="images/products/order/order-item-1.png" alt="">
                    </figure>
                    <div class="col-md-8 col-12 description">
                        <h4>Carolina Crown Amish Bed</h4>
                        <p class="subtotal">Subtotal: <span>$1,371.00</span></p>
                        <ul class="specification-list">
                            <li>Bed Size: <span>California King</span></li>
                            <li>Nightstand: <span>Open with pullout shelf</span></li>
                            <li>Chets of Drawers: <span>2 doors & 3 drawers</span></li>
                            <li>Wood: <span>Oak</span></li>
                            <li>Oak Stain: <span>Natural</span></li>
                            <li>Mirror: <span>Mirror</span></li>
                            <li>Underbed storage: <span>Side Drawers (3 drawers per side)</span></li>
                            <li>Drawer Sliders: <span>OFull-Extension Soft-close Undermount Slides</span></li>
                            <li>Other Hardwarea Choices for Drawers: <span>Standard</span></li>
                            <li>Other Hardwarea Choices for Doors: <span>Standard</span></li>
                            <li>Extra Nightstand: <span>3 drawer nightstand</span></li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-large">View All</a>
                    </div>
                </div>
                <!-- single product item ends -->
                
                <?php 
                    // repeating the single product 2 times
                    for($i=1; $i<3; $i++){
                ?>
                <!-- single product item  -->
                <div class="row ordered-item">
                    <figure class="col-md-4 col-12 figure image">
                        <img src="images/products/order/order-item-1.png" alt="">
                    </figure>
                    <div class="col-md-8 col-12 description">
                        <h4>Carolina Crown Amish Bed</h4>
                        <p class="subtotal">Subtotal: <span>$1,371.00</span></p>
                        <ul class="specification-list">
                            <li>Bed Size: <span>California King</span></li>
                            <li>Nightstand: <span>Open with pullout shelf</span></li>
                            <li>Chets of Drawers: <span>2 doors & 3 drawers</span></li>
                            <li>Wood: <span>Oak</span></li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-large">View All</a>
                    </div>
                </div>
                 <!-- single product item ends -->
                <?php } ?>
            </div>
        </div>
    </div>
</div>