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
	<label class="control-label" for="lang">Lang key:</label>
    </div>
    <div class="col-xs-4">
	<?php
	echo form_input([
	    'name' => 'lang_edit',
	    'class' => 'form-control',
	    'value' => set_value('lang_edit', $records->lang),
	    'id' => 'lang'
	]);
	?>
    </div>
    <div class="col-xs-6"><?php echo form_error("lang_edit"); ?></div>
</div>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label" for="title">Lang title:</label>
    </div>
    <div class="col-xs-4">
	<?php
	echo form_input([
	    'name' => 'title',
	    'class' => 'form-control',
	    'value' => set_value('title', $records->title),
	    'id' => 'title'
	]);
	?>
    </div>
    <div class="col-xs-6"><?php echo form_error("title"); ?></div>
</div>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label" for="status">Status:</label>
    </div>
    <div class="col-xs-4">
	<?php echo form_dropdown('status', [0 => 'disabled', 1 => 'enabled'], set_value('status', $records->status), 'id="status" class="form-control"'); ?>
    </div>
    <div class="col-xs-6"><?php echo form_error("status"); ?></div>
</div>
<?php if ($records->default): ?>
    <input type="hidden" name="default" value="1">
<?php else: ?>
    <div class="form-group row">
        <div class="col-xs-2 text-right">
    	<label class="control-label" for="default">Set default:</label>
        </div>
        <div class="col-xs-4">
    	<label class="middle">
		<?php echo form_checkbox('default', 1, set_checkbox('default', 1), 'id="default" class="ace"'); ?>
    	    <span class="lbl"></span>
    	</label>
        </div>
        <div class="col-xs-6"><?php echo form_error("default"); ?></div>
    </div>
<?php endif; ?>
<div class="form-group row">
    <div class="col-xs-2 text-right">
	<label class="control-label">Image:</label>
    </div>
</div>
<?php echo $submit_form; ?>
<?php echo form_close(); ?>