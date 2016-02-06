<div class="row submit-panel">
    <div class="col-xs-12">
	<?php if ($save): ?>
	    <button type="submit" class="btn btn-primary" name="submit" value="save">Save</button>
	<?php endif; ?>
	<?php if ($save_close): ?>
	    <button type="submit" class="btn btn-success" name="submit" value="save_close">Save and close</button>
	<?php endif; ?>
	<?php if ($save_create): ?>
	    <button type="submit" class="btn btn-purple" name="submit" value="save_create">Save and create new</button>
	<?php endif; ?>
    </div>
</div>