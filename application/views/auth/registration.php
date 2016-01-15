<div id="signup-box" class="signup-box visible widget-box no-border">
    <div class="widget-body">
	<div class="widget-main">
	    <h4 class="header green lighter bigger">
		<i class="icon-group blue"></i>
		New User Registration
	    </h4>

	    <div class="space-6"></div>
	    <p> Enter your details to begin: </p>

	    <form>
		<fieldset>
		    <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			    <input type="email" class="form-control" placeholder="Email" />
			    <i class="icon-envelope"></i>
			</span>
		    </label>

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

		    <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			    <input type="password" class="form-control" placeholder="Repeat password" />
			    <i class="icon-retweet"></i>
			</span>
		    </label>

		    <label class="block">
			<input type="checkbox" class="ace" />
			<span class="lbl">
			    I accept the
			    <a href="#">User Agreement</a>
			</span>
		    </label>

		    <div class="space-24"></div>

		    <div class="clearfix">
			<button type="reset" class="width-30 pull-left btn btn-sm">
			    <i class="icon-refresh"></i>
			    Reset
			</button>

			<button type="button" class="width-65 pull-right btn btn-sm btn-success">
			    Register
			    <i class="icon-arrow-right icon-on-right"></i>
			</button>
		    </div>
		</fieldset>
	    </form>
	</div>

	<div class="toolbar center">
	    <?php echo anchor('auth','<i class="icon-arrow-left"></i> Back to login','class="back-to-login-link"');?>
	</div>
    </div>
</div>