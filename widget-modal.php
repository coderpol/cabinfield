<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Widget and Modal Work</title>
    <!-- including google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"> <!-- including dm sans font -->
    <link rel="stylesheet" href="css/widget.css">
</head>
<body>

<!-- couple info widget -->
<div class="widget-area">
    <button type="button" class="btn btn-secondary btn-coupon widget-trigger" data-target="coupon">
        <i class="cabincon info size-20"></i> <span>Coupon info</span>
    </button>
    <div class="info-card coupon" id="coupon">
        <button type="button" class="btn btn-dismiss" data-target="coupon">&times;</button>
        <div class="header">
            <h4>Coupon info</h4>
        </div>
        <div class="body">
            <h5>Get $100 Off Your First Order</h5>
            <ul>
                <li>Join our email list and get a coupon</li>
                <li>Redeem your coupon on orders over $1,500 excluding shipping</li>
            </ul>
			<a href="#" id="coupon_modal_trigger" class="btn btn-secondary btn-block">Send me a coupon</a>
        </div>
    </div>
</div>
<!-- couple info widget ends-->


<!-- modal code  -->
<div class="modal fade" id="coupon_modal" tabindex="-1" aria-labelledby="coupon_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Get the Cabinfield Email Newsletter</h5>
                <button type="button" class="btn-close" id="coupon_modal_close"></button>
            </div>
            <form action="#" class="row form-line">
                <div class="modal-body">
                    <div class="col-12">
                        <label for="" class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter your zip code" value="10001" aria-label="Zip Code">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal code ends -->


    <!-- the latest jquery  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- All the custom js are here  -->
<script src="js/widget-modal.js"></script>
</body>
</html>