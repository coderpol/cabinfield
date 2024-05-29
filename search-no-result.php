<?php 
$page_title="Search - No Result"; // dynamic page title for every page

// include header
include_once('sections/layouts/header.php') 
?>


<!-- .page-content area starts  -->
<div class="section page-content search-result">
    <div class="container">
        <div class="row mt-30">
            <div class="col-12 section-title small  bottom-divider">
                <h2><span>Search</span> result for "X"</h2>
            </div>
            <div class="col-12 mt-50 section-sub-title bottom-divider">
                <h3>We’re sorry, we didn’t find a match.<br>Maybe try another search?</h3>
            </div>
        </div>
    </div>
</div>

<!-- include footer area  -->
<?php include_once('sections/layouts/footer.php') ?>