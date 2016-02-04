<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
	<?php if ($create): ?>
	    <?php echo anchor($this->router->class.'/create','<i class="icon-plus"></i>','class="btn btn-success"');?>
	<?php endif; ?>

	<?php if ($settings): ?>
	    <?php echo anchor($this->router->class.'/settings','<i class="icon-cogs"></i>','class="btn btn-info"');?>
	<?php endif; ?>
	<!--button class="btn btn-warning">
	    <i class="icon-group"></i>
	</button>
    
	<button class="btn btn-danger">
	    <i class="icon-cogs"></i>
	</button-->
    </div>
    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
	<span class="btn btn-success"></span>

	<span class="btn btn-info"></span>

	<span class="btn btn-warning"></span>

	<span class="btn btn-danger"></span>
    </div>

</div>