<div class="accordion-item">
    <div class="accordion-header" id="headingFour">
        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <h4>Leaf Option:</h4> 
            <span class="item">Solid Top (Standard)</span>
        </div>
    </div>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
        <div class="info">
            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_zip">More Information About this Option</a>
        </div>
        <div class="accordion-body">
            <div class="alert" role="alert">
                <i class="fa-solid fa-circle-info"></i>
                <p>Please note that the stain or paint colors shown may not appear the same on all computer monitors. Actual results on your furniture may also vary due to natural variations in the color, grain, and texture of the wood. Please click here to request samples.</p>
            </div>
            <!-- use .has-solid class if you have the solid top in the options  -->
            <div class="stack-area has-solid">
                <div class="stack">
                    <label class="image" for="leaf-1">
                        <div class="text">
                            <span>Solid Top</span> <strong>Standard</strong>
                        </div>
                    </label>
                    <!-- <span class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></span> -->
                    <h5>Medium OCS-110 </h5>
                    <input type="radio" name="leaf-type" class="form-check-input" checked id="leaf-1">
                    <div class="counter">
                        <span class="btn" data-action="decrease">-</span>
                        <input type="number" class="count" value="1"> 
                        <span class="btn" data-action="increase">+</span>
                    </div>
                </div>
                <!-- <div class="stack">
                    <input type="radio" name="leaf-type" class="btn-check" id="leaf-2">
                    <label class="btn" for="leaf-2">
                        <img src="images/leaf/leaf-2.png" alt="">
                    </label>
                    <span class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <h5>Medium OCS-110 </h5>
                    <div class="counter">
                        <span class="btn" data-action="decrease">-</span>
                        <input type="number" class="count" value="1"> 
                        <span class="btn" data-action="increase">+</span>
                    </div>
                </div>
                <div class="stack">
                    <input type="radio" name="leaf-type" class="btn-check" id="leaf-3">
                    <label class="btn" for="leaf-3">
                        <img src="images/leaf/leaf-3.png" alt="">
                    </label>
                    <span class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <h5>Medium OCS-110 </h5>
                    <div class="counter">
                        <span class="btn" data-action="decrease">-</span>
                        <input type="number" class="count" value="1"> 
                        <span class="btn" data-action="increase">+</span>
                    </div>
                </div> -->
                <?php 
                    for($i=2;$i<=3;$i++){
                ?>
                <div class="stack">
                    <label class="image">
                        <img src="images/leaf/leaf-<?php echo $i; ?>.png" alt="">
                        <div class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></div>
                    </label>
                    <h5>Medium OCS-110 </h5>
                    <input type="radio" name="leaf-type" class="form-check-input" id="stain-<?php echo $i; ?>">
                    <div class="counter">
                        <span class="btn" data-action="decrease">-</span>
                        <input type="number" class="count" value="1"> 
                        <span class="btn" data-action="increase">+</span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="button-area">
            <a href="#" class="btn btn-primary btn-large">Next</a>
        </div>
    </div>
</div>