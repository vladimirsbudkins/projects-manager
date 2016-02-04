<?php echo form_open(); ?>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label ">Id:</label>
    </div>
    <div class="col-xs-4">
	<?php echo $records->id; ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label ">Lang key:</label>
    </div>
    <div class="col-xs-4">
	<?php
	echo form_input([
	    'name' => 'lang',
	    'class' => 'form-control',
	    'value' => set_value('lang',$records->lang)
	]);
	?>
	<?php echo form_error("lang"); ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label ">Lang title:</label>
    </div>
    <div class="col-xs-4">
	<?php
	echo form_input([
	    'name' => 'title',
	    'class' => 'form-control',
	    'value' => set_value('title',$records->title)
	]);
	?>
	<?php echo form_error("title"); ?>
    </div>
</div>
<?php var_dump($records)?>
<?php echo $submit_form; ?>
<?php echo form_close(); ?>