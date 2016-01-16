<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
	<div class="widget-main">
	    <h4 class="header blue lighter bigger">
		<i class="icon-coffee green"></i>
		Please Enter Your Information
	    </h4>

	    <div class="space-6"></div>
		<?php echo form_open();?>
		<fieldset>
		    <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			    <?php echo form_input(array('name' => "login_email", 'class' => 'form-control', 'value' => set_value("login_email"),'placeholder'=>'Email')); ?>
			    <i class="icon-user"></i>
			</span>
		    </label>
		    <?php echo form_error('login_email'); ?>
		    <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			    <?php echo form_input(array('name' => "password", 'class' => 'form-control', 'value' => set_value("password"),'placeholder'=>'Password','type'=>'password')); ?>
			    <i class="icon-lock"></i>
			</span>
		    </label>
		    <?php echo form_error('password'); ?>
		    <div class="space"></div>

		    <div class="clearfix">
			<label class="inline">
			    <?php echo form_checkbox('remember',1,set_checkbox('remember',1),'id="remember" class="ace"');?>
			    <label class="lbl" for="remember" style="cursor: pointer"> Remember Me</label>
			</label>
			<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
			    <i class="icon-key"></i> Login
			</button>
		    </div>
		    <p class="text-danger">wdwq</p>
		    <div class="space-4"></div>
		</fieldset>
	    <?php echo form_close();?>
	</div>

	<div class="toolbar clearfix">
	    <div>
		<?php echo anchor('auth/forgot_password','<i class="icon-arrow-left"></i> I forgot my password','class="forgot-password-link"');?>
	    </div>
	    <div>
		<?php echo anchor('auth/registration','<i class="icon-arrow-right"></i> I want to register','class="user-signup-link"');?>
	    </div>
	</div>
    </div>
</div>




