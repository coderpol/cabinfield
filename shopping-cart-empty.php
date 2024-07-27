<?php 
$page_title="Shopping Cart-Empty"; // dynamic page title for every page

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
                <p class="">Your shopping cart is currently empty!</p>
            </div>
        </div>
        <!-- page title ends  -->
        
        <!-- shopping items area  -->
        <div class="row empty-cart">
            <div class="col-md-4">
                <div class="cart-item cart-id border-top">
                    <p>Cart ID: <span class="orange cart-id-no">12345</span></p>
                </div>
            </div>
        </div>
    
    </div>
</div>

<!-- include footer area  -->
<?php include_once('sections/layouts/footer.php') ?>