<div class="display-slider" id="<?php echo $slider; ?>-slider">
    <!-- 
    you have to keep the id number from 1 to 5 serially.
    And it should have a hyphen before the number 
    -->
    <?php 
        for($i=1;$i<6;$i++){
    ?>
    <figure class="slide" id="<?php echo $slider."-".$i; ?>">
        <img src="images/display/slider/main/<?php echo $slider."-".$i; ?>.png" alt="">
    </figure>
    <?php
        }
    ?>
</div>

<div id="<?php echo $slider; ?>-thumbs" class="slider-thumbs">
    <!-- 
        data-slide-target should be pointed to the right id of the main slider
        -->
        <?php 
        for($i=1;$i<6;$i++){
    ?>
    <div class="thumb" data-slide-target="<?php echo $slider."-".$i; ?>">
        <img src="images/display/slider/thumbs/<?php echo $slider; ?>-thumb-<?php echo $i; ?>.png" alt="">
    </div>
    <?php
        }
    ?>
</div>