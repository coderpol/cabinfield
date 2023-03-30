<?php 
// include header
include_once('sections/layouts/header-minimal.php') 
?>

<div class="section not-found-section clearfix">
    <div class="container small">
        <div class="row page-head">
            <h2 class="superheading">404</h2>
            <h3>Oops! The Requested resource can't be found.</h3>
            <p>You can try using the search field below or browse the links to find the category the page should be in.</p>
        </div>
        <div class="row search-area">
            <form action="/search" class="searchform">
                <input type="search" name="search" id="search" placeholder="Search our store">
                <button type="submit" class="search_submit"></button>
            </form>
        </div>
        <div class="links-area">
            <h4>Fine Furniture</h4>
            <ul class="links">
                <li><a href="#">Bedrooms</a></li>
                <li><a href="#">Kitchen & Dining Room</a></li>
                <li><a href="#">Living Room & Entertainment</a></li>
                <li><a href="#">Office</a></li>
            </ul>
            <h4>Rustic Lodge</h4>
            <ul class="links">
                <li><a href="#">Rustic Lodge Bedrooms</a></li>
                <li><a href="#">Rustic Lodge Kitchen & Dining Room</a></li>
                <li><a href="#">Rustic Lodge Living Room & Entertainment</a></li>
                <li><a href="#">Rustic Lodge Office</a></li>
            </ul>
            
            <h4>Outdoor</h4>
            <ul class="links">
                <li><a href="#">Gazebos & Outdoor Structure</a></li>
                <li><a href="#">Outdoor Furniture Sets</a></li>
                <li><a href="#">Outdoor Lounge Furniture</a></li>
                <li><a href="#">Outdoor Dining Furniture</a></li>
                <li><a href="#">Specialty Playsets</a></li>
            </ul>
        </div>
    </div>
</div>

<?php
    include_once('sections/layouts/footer-minimal.php');
?>