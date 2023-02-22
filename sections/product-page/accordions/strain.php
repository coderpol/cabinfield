<div class="accordion-item">
    <div class="accordion-header" id="headingThree">
        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <h4>Stain:</h4>
        </div>
    </div>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
        <div class="info">
            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_zip">More Information About this Option</a>
        </div>
        <div class="accordion-body">
            <div class="alert" role="alert">
                <i class="fa-solid fa-circle-info"></i>
                <p>Please note that the stain or paint colors shown may not appear the same on all computer monitors. Actual results on your furniture may also vary due to natural variations in the color, grain, and texture of the wood. Please click here to request samples.</p>
            </div>
            <div class="stack-area">
                <?php 
                    for($i=1;$i<=14;$i++){
                ?>
                <div class="stack">
                    <label class="image">
                        <img src="images/stain/stain-<?php echo rand(1,3); ?>.png" alt="">
                        <div class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </label>
                    <h5>Medium OCS-110 </h5>
                    <input type="radio" name="stain-type" class="form-check-input" id="stain-<?php echo $i; ?>">
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
</div>