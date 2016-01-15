<?php $this->load->view('parts/header'); ?>
<?php $this->load->view('parts/top_nav'); ?>
<div class="main-container" id="main-container">
    <div class="main-container-inner">
	<a class="menu-toggler" id="menu-toggler" href="#">
	    <span class="menu-text"></span>
	</a>
	<?php $this->load->view('parts/left_nav'); ?>
	<div class="main-content">
	    <?php $this->load->view('parts/breadcrump'); ?>
	    <div class="page-content">
		<div class="row">
		    <div class="col-xs-12">
			<?php $this->load->view($this->main_content); ?>
		    </div>
		</div>
	    </div>
	</div>
    </div>
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div>

<?php $this->load->view('parts/footer'); ?>