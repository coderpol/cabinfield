<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <span class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-11" role="tab" aria-controls="pills-11" aria-selected="true">Customer Reviews</span>
            </li>
            <li class="nav-item" role="presentation">
                <span class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-12" role="tab" aria-controls="pills-12" aria-selected="false">Testimonials</span>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane faden" id="pills-11" role="tabpanel" aria-labelledby="pills-1">
                <p>Customer Review Content Goes Here</p>
            </div>
            <div class="tab-pane fade show active" id="pills-12" role="tabpanel" aria-labelledby="pills-3">
                <?php include('sections/product-page/tabs/review.php'); ?>
            </div>
        </div>
    </div>
</div>