<div class="accordion-item">
    <div class="accordion-header" id="headingSix">
        <h4 class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Fabric: <span data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-circle-question"></i></span></h4>
    </div>
    <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix">
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
                    <input type="radio" name="stain-type" class="btn-check" id="stain-<?php echo $i; ?>">
                    <label class="btn" for="stain-<?php echo $i; ?>">
                        <img src="images/fabric/thumb/fabric.png" alt="">
                    </label>
                    <span class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <h5>Medium OCS-110 </h5>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>