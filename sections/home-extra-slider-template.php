<div class="display-slider extra-slider" id="<?php echo $slider; ?>-slider">
    <button class="btn btn-prev disabled" data-slide="<?php echo $slider; ?>">Prev</button>
    <div class="extra-list">
        <div class="extra-track">
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
    </div>
    <button class="btn btn-next" data-slide="<?php echo $slider; ?>">Next</button>
</div>

<div id="<?php echo $slider; ?>-thumbs" class="slider-thumbs">
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