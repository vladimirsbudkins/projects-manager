<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
	<span class="navbar-brand"><i class="icon-text-height"></i> Translates</span>
    </div>
    <ul class="nav navbar-nav">
	<?php $active = $this->uri->rsegment(2) == 'index' ? 'class="active"' : null; ?>
	<li <?php echo $active ?>><?php echo anchor('translates', 'Overview') ?></li>
	<?php $active = $this->uri->rsegment(2) == 'create' ? 'class="active"' : null; ?>
	<li <?php echo $active ?>><?php echo anchor('translates/create','Create') ?></li>
    </ul>
</nav>