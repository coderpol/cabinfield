<?php 
// dynamic page title
$page_title="My Account - Order Details";

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
            <div class="col-md-12 col-12 section-sub-title">
                <h2>Order #139119/1 Items</h2>
            </div>
        </div>
        <div class="row order-list-area">
            <div class="col-md-12 order-details-table">
                <table class="table table-responsive order-details">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Details</th>
                            <th>Shipping Address</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Luxe Round Amish Patio Table</td>
                            <td>Price/Item: $1,284.00<br/>Shipping: $0.00<br/>No. of Items: 1<br/>Total:  $1,284.00</td>
                            <td>Test order, Cvetaeovi 12,<br/>Wilmington, 19804 DE</td>
                            <td>2022-05-20 Order Placed<br/>2022-05-20 Order Shipped</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <div class="tracking">
                    <h3>Tracking No.: 1111111111</h3>
                    <p>You may track your package on following link:<br/><a href="https://www.figma.com/file/zcQ8sDfQC9MDA8SQDaxV5G/Cabinfield-Redesign-2022?node-id=0%3A1">https://www.figma.com/file/zcQ8sDfQC9MDA8SQDaxV5G/Cabinfield-Redesign-2022?node-id=0%3A1</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- confirmation text area ends  -->

<!-- include the footer area  -->
<?php include_once('sections/layouts/footer.php') ?>