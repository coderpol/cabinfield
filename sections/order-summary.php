
<div class="section clearfix mb-5 order-summary-section">
    <div class="container">
        <div class="row">
            <!-- title starts  -->
            <div class="col-md-12 section-title small">
                <h3>Order Summary</h3>
            </div>
            <!-- title ends  -->
            <div class="col-md-9 ordered-items-list">
                <?php 
                    // repeating the single product 3 times
                    for($i=1; $i<4; $i++){
                ?>
                <!-- single product item  -->
                <div class="row ordered-item">
                    <figure class="col-md-4 col-12 figure image">
                        <img src="images/products/order/order-item-1.png" alt="">
                    </figure>
                    <article class="col-md-8 col-12 description">
                        <h4>Carolina Crown Amish Bed</h4>
                        <ul class="specification-list">
                            <li>Subtotal: <span class="value">$1,371.00</span></li>
                            <li>Bed Size: <span class="black">Queen</span></li>
                            <li>Headboard Style: <span class="black">Adessa</span></li>
                            <li>Set: <span class="black">Full Bed</span></li>
                            <li>Wood: <span class="black">Quartersawn White Oak</span></li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-large">View All</a>
                    </article>
                </div>
                 <!-- single product item ends -->
                <?php } ?>
            </div>
        </div>
    </div>
</div>