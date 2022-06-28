<div class="accordion-item">
    <div class="accordion-header" id="headingFifth">
        <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">Fabric: <a href="#"><i class="fa-solid fa-circle-question"></i></a></span>
    </div>
    <div id="collapseFifth" class="accordion-collapse collapse show" aria-labelledby="headingFifth" data-bs-parent="#customizations">
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
                    <input type="radio" name="stain-type" class="btn-check" id="stain-<?php echo $i; ?>" autocomplete="off">
                    <label class="btn" for="stain-<?php echo $i; ?>">
                        <figure class="figure" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title='
                                <img class="thumb-xl" src="images/fabric/thumb/fabric.png" alt="">
                                <h3 class="title">Description</h3>
                                <ul class="description">
                                    <li>4-10 Dove</li>
                                    <li>Fiber Content: <span>65% Viscose, 35% Polyester</span></li>
                                    <li>Pattern Repeat: <span>Railroaded</span></li>
                                    <li>Cleaning Code: <span>S</span></li>
                                    <li>Abrasion Rating: <span>M</span></li>
                                </ul>
                            '>
                            <img src="images/fabric/thumb/fabric.png" alt="">
                            <div class="overlay">
                                <i class="cabincon size-55 check-white"></i>
                            </div>
                        </figure>
                        <span><strong>Medium OCS-110</strong></span>
                    </label>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>