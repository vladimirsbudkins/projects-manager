<div class="sidebar" id="sidebar">

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
	<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
	    <button class="btn btn-success">
		<i class="icon-signal"></i>
	    </button>

	    <button class="btn btn-info">
		<i class="icon-pencil"></i>
	    </button>

	    <button class="btn btn-warning">
		<i class="icon-group"></i>
	    </button>

	    <button class="btn btn-danger">
		<i class="icon-cogs"></i>
	    </button>
	</div>

	<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
	    <span class="btn btn-success"></span>

	    <span class="btn btn-info"></span>

	    <span class="btn btn-warning"></span>

	    <span class="btn btn-danger"></span>
	</div>
    </div>

    <ul class="nav nav-list">
	<?php $li_active = $this->router->class == 'dashboard' ? 'class="active"' : null; ?>
	<li <?php echo $li_active;?>>
	     <?php echo anchor('dashboard', '<i class="icon-dashboard"></i> <span class="menu-text"> Dashboard </span>'); ?>
	</li>
	<?php $li_active = $this->router->class == 'translates' ? 'class="active"' : null; ?>
	<li <?php echo $li_active;?>>
	     <?php echo anchor('translates', '<i class="icon-text-height"></i> <span class="menu-text"> Translates </span>'); ?>
	</li>
    </ul>

    <div class="sidebar-collapse" id="sidebar-collapse">
	<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>
</div>