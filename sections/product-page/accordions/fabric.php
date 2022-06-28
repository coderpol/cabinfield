<div class="accordion-item">
    <div class="accordion-header" id="headingFifth">
        <h4 class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">Fabric: <span data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-circle-question"></i></span></h4>
    </div>
    <div id="collapseFifth" class="accordion-collapse collapse show" aria-labelledby="headingFifth">
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
                        <div class="figure">
                            <img src="images/fabric/thumb/fabric.png" alt="">
                        </div>
                    </label>
                    <span class="open-details" data-bs-toggle="modal" data-bs-target="#edit_zip"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <h5>Medium OCS-110 </h5>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>