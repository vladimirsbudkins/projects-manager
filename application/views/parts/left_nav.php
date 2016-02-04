<div class="sidebar sidebar-fixed" id="sidebar">
    <?php echo $navigation_panel;?>

    <ul class="nav nav-list">
	<?php $li_active = $this->router->class == 'dashboard' ? 'class="active"' : null; ?>
	<li <?php echo $li_active;?>>
	     <?php echo anchor('dashboard', '<i class="icon-dashboard"></i> <span class="menu-text"> Dashboard </span>'); ?>
	</li>
	<?php $li_active = $this->router->class == 'translates' ? 'class="active"' : null; ?>
	<li <?php echo $li_active;?>>
	     <?php echo anchor('translates', '<i class="icon-text-height"></i> <span class="menu-text"> Translates </span>'); ?>
	</li>
	<?php $li_active = $this->router->class == 'languages' ? 'class="active"' : null; ?>
	<li <?php echo $li_active;?>>
	     <?php echo anchor('languages', '<i class="icon-flag"></i> <span class="menu-text"> Languages </span>'); ?>
	</li>
    </ul>

    <div class="sidebar-collapse" id="sidebar-collapse">
	<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>
</div>