<div class="pre-gift-form">
    <div class="form-area <?php echo ($collapse) ? "collapse" : "show" ?>" id="pre-gift-<?php echo $number; ?>">
        <p>Please enter your free personal message to your Virtual Pre-Gifting here</p>
        <div class="form-line">
            <label for="occassion-<?php echo $number; ?>" class="form-label">Occassion</label>
            <select name="occassion-<?php echo $number; ?>" id="occassion-<?php echo $number; ?>" class="form-select">
                <option value="" selected disabled>--select--</option>
                <option value="value-1">Value 1</option>
                <option value="value-2">Value 2</option>
                <option value="value-3">Value 3</option>
                <option value="value-4">Value 4</option>
                <option value="value-5">Value 5</option>
                <option value="value-6">Value 6</option>
            </select>
        </div>
        
        <div class="form-line">
            <label for="to-<?php echo $number; ?>" class="form-label">To</label>
            <input type="text" name="to-<?php echo $number; ?>" id="to-<?php echo $number; ?>" class="form-control">
        </div>
        
        <div class="form-line">
            <label for="message-<?php echo $number; ?>" class="form-label">Message</label>
            <textarea name="message-<?php echo $number; ?>" id="message-<?php echo $number; ?>" cols="30" rows="3" class="form-control"></textarea>
        </div>
        
        <div class="form-line">
            <label for="closing-<?php echo $number; ?>" class="form-label">Clossing</label>
            <select name="closing-<?php echo $number; ?>" id="closing-<?php echo $number; ?>" class="form-select">
                <option value="" selected disabled>--select--</option>
                <option value="value-1">Value 1</option>
                <option value="value-2">Value 2</option>
                <option value="value-3">Value 3</option>
                <option value="value-4">Value 4</option>
                <option value="value-5">Value 5</option>
                <option value="value-6">Value 6</option>
            </select>
        </div>
        
        <div class="form-line">
            <label for="from-<?php echo $number; ?>" class="form-label">From</label>
            <input type="text" name="form-<?php echo $number; ?>" id="form-<?php echo $number; ?>" class="form-control">
        </div>
        
        <a href="#">View a Sample</a>
    </div>
</div>