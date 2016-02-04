<?php if ($search): ?>

    <div class="nav-search" id="nav-search">
	<?php echo form_open($this->router->class.'/search',['method'=>'get','class'=>'form-search']);?>
    	<span class="input-icon">
    	    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
    	    <i class="icon-search nav-search-icon"></i>
    	</span>
	<?php echo form_close();?>
    </div>
<?php endif; ?>