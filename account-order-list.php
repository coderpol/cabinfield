<?php 
// dynamic page title
$page_title="My Account - Order List";

// include header
include_once('sections/layouts/header.php') 
?>

<!-- breadcrumb section starts  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-area">
                <!-- class dark for darker text and reverse for back direction  -->
                <ol class="breadcrumb dark reverse">
                    <li><a href="thank-you.php">Back</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends  -->

<!-- confirmatin text area starts  -->
<div class="section clearfix auth-section">
    <div class="container">
        <div class="row page-headline">
            <div class="col-md-12 col-12 section-title medium">
                <h2>My Account</h2>
            </div>
            <div class="user-links-area">
                <ul class="user-links">
                    <li><a href="shopping-cart.php">View your Shopping Cart</a></li>
                    <li><a href="#">View your Wish List</a></li>
                    <li><a href="#">Change Password</a></li>
                </ul>
            </div>
        </div>
        <div class="row order-list-area">
            <div class="col-md-12 col-12 section-title small">
                <h2>My Orders</h2>
            </div>
            <div class="order-list-table">
                <table class="table table-responsive order-list">
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Order Date</th>
                            <th>Order Amount</th>
                            <th>Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#">#39119/1</a></td>
                            <td>May 20, 2022</td>
                            <td>$7,406.77</td>
                            <td><span>Order  Placed</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">#39119/1</a></td>
                            <td>May 20, 2022</td>
                            <td>$7,406.77</td>
                            <td><span>Order  Placed</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">#39119/1</a></td>
                            <td>May 20, 2022</td>
                            <td>$7,406.77</td>
                            <td><span class="orange">Order  Shipped</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- confirmation text area ends  -->

<!-- include the footer area  -->
<?php include_once('sections/layouts/footer.php') ?>