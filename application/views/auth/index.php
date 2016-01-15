<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
	<div class="widget-main">
	    <h4 class="header blue lighter bigger">
		<i class="icon-coffee green"></i>
		Please Enter Your Information
	    </h4>

	    <div class="space-6"></div>

	    <form>
		<fieldset>
		    <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			    <input type="text" class="form-control" placeholder="Username" />
			    <i class="icon-user"></i>
			</span>
		    </label>

		    <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			    <input type="password" class="form-control" placeholder="Password" />
			    <i class="icon-lock"></i>
			</span>
		    </label>

		    <div class="space"></div>

		    <div class="clearfix">
			<label class="inline">
			    <input type="checkbox" class="ace" />
			    <span class="lbl"> Remember Me</span>
			</label>

			<button type="button" class="width-35 pull-right btn btn-sm btn-primary">
			    <i class="icon-key"></i>
			    Login
			</button>
		    </div>

		    <div class="space-4"></div>
		</fieldset>
	    </form>
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




