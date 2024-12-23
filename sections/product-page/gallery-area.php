<?php 
// set the default image here
$gallery_image_link = isset($gallery_image_link)? $gallery_image_link : "images/products/gallery/bed-large.png";

// set the default caption here
$gallery_caption = isset($gallery_caption) ? $gallery_caption : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat";

// set default gallery sldier part
$gallery_slider_part = isset($gallery_slider_part) ? $gallery_slider_part : "sections/product-page/gallery-thumb-slider.php";
?>



<div class="gallery-full">
    <div class="gallery-field <?php echo $note_classes; ?>">
        <img class="full" src="<?php echo $gallery_image_link; ?>" alt="">
    </div>
    <div id="caption">
        <p><?php echo $gallery_caption; ?></p>
    </div>
</div>

<?php 
    include_once($gallery_slider_part);
?>