<!-- Wrapping section for the slider  -->
<div class="container testimonial-slider" id="testimonial-slider">
    <?php 
        // I am using php loop to create bunch of testimonials (3 here)
        for($i=1;$i<4;$i++){
    ?>
     <!-- One single testimonial  -->
    <div class="slide">
        <div class="quotation">
            <!-- The quote  -->
            <blockquote>
                Design the ideal backdrop for your unique lifestyle. Our Amish craftsmen are skilled in building a variety of styles, including Mission style furniture, contemporary, and traditional furniture, made in the USA. A blend of genuine comfort and artisanal design allows you to create the home of your dreams.
            </blockquote>
            <!-- The quote ends -->
            
            <!-- details of author  -->
            <p>
                <span class="author">Samantha William <i class="fa-solid fa-circle-check"></i></span>
                <span class="address">Semarang</span>
            </p>
            <!-- details of author ends -->
        </div>
        
        <!-- The image related to the quote  -->
        <div class="image">
            <img src="images/testimonials/image-1.png" alt="">
        </div>
        <!-- The image related to the quote  ends -->
    </div>
    <?php } ?>
</div>

