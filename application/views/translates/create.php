<?php echo form_open(); ?>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label ">Select set:</label>
    </div>
    <div class="col-xs-4">
	<?php echo form_dropdown('set', [0 => 'yes', 1 => 'no'], set_value('set'), 'class="form-control"'); ?>
	<?php echo form_error("set"); ?>
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
	<?php echo form_error("new_set"); ?>
    </div>
</div>
<?php foreach ($this->lang->all_languages_data as $key => $value): ?>
    <div class="form-group row">
        <div class="col-xs-2 text-right">
	    <label class="control-label"><?php echo $value->title; ?></label>
        </div>
        <div class="col-xs-4">
	    <?php
	    echo form_input([
		'name' => "value[$value->id]",
		'class' => 'form-control',
		'value' => set_value("value[$value->id]")
	    ]);
	    ?>
	    <?php echo form_error("value[$value->id]"); ?>
        </div>
    </div>
<?php endforeach; ?>
<div class="row submit-panel">
    <div class="col-xs-12">
	<button type="submit" class="btn btn-primary" name="save">Save</button>
	<button type="submit" class="btn btn-success" name="save_close">Save and close</button>
	<button type="submit" class="btn btn-purple" name="save_create">Save and create new</button>
    </div>
</div>
<?php echo form_close(); ?>