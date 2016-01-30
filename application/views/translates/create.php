<?php echo form_open(); ?>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label ">Select set:</label>
    </div>
    <div class="col-xs-4">
	<?php echo form_dropdown('set', [0 => 'yes', 1 => 'no'], set_value('set'), 'class="form-control"'); ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label ">Or create new set:</label>
    </div>
    <div class="col-xs-4">
	<?php
	echo form_input([
	    'name' => 'new_set',
	    'class' => 'form-control',
	    'value' => set_value('new_set')
	]);
	?>
    </div>
</div>
<?php echo form_close(); ?>