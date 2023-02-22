<div class="accordion-item">
    <div class="accordion-header" id="headingSix">
        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
            <h4>Fabric:</h4>
        </div>
    </div>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
        <div class="info">
            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_zip">More Information About this Option</a>
        </div>
        <div class="accordion-body">
            <div class="alert" role="alert">
                <i class="fa-solid fa-circle-info"></i>
                <p>Please note that the samples shown may not appear the same on all computer monitors. Please click here to request samples.</p>
            </div>
            <div class="row stack-area stack-tweleve">
                <?php 
                    for($i=21;$i<=76;$i++){
                ?>
                <div class="stack">
                    <label class="image">
                        <img src="images/fabric/thumb/fabric.png" alt="">
                        <div class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></div>
                    </label>
                    <h5>Medium OCS-110 </h5>
                    <input type="radio" name="stain-type" class="form-check-input" id="stain-<?php echo $i; ?>">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>