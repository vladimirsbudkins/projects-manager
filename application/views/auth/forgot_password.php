<div id="forgot-box" class="forgot-box widget-box no-border visible">
    <div class="widget-body">
	<div class="widget-main">
	    <h4 class="header red lighter bigger">
		<i class="icon-key"></i>
		Retrieve Password
	    </h4>

	    <div class="space-6"></div>
	    <p>
		Enter your email and to receive instructions
	    </p>

	    <form>
		<fieldset>
		    <label class="block clearfix">
			<span class="block input-icon input-icon-right">
			    <input type="email" class="form-control" placeholder="Email" />
			    <i class="icon-envelope"></i>
			</span>
		    </label>

		    <div class="clearfix">
			<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
			    <i class="icon-lightbulb"></i>
			    Send Me!
			</button>
		    </div>
		</fieldset>
	    </form>
	</div>

	<div class="toolbar center">
	    <?php echo anchor('auth','<i class="icon-arrow-right"></i> Back to login','class="back-to-login-link"');?>
	</div>
    </div>
</div>