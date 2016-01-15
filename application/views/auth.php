<?php $this->load->view('parts/header'); ?>
<div class="main-container">
    <div class="main-content">
	<div class="row">
	    <div class="col-sm-10 col-sm-offset-1">
		<div class="login-container">
		    <div class="center">
			<h1>
			    <i class="icon-leaf green"></i>
			    <span class="red">Projects</span>
			    <span class="white">Manager</span>
			</h1>
			<h4 class="blue">&copy; Company Name</h4>
		    </div>

		    <div class="space-6"></div>
		    <div class="position-relative">
			<?php $this->load->view($this->main_content); ?>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>
<?php $this->load->view('parts/footer'); ?>