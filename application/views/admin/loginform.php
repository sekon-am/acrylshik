<?php load_module('admin/admin','_start'); ?>
<form action="<?php echo site_url("admin/admin/login"); ?>" method="post" class="form-signin" id='login-form'>
	<div class="form-signin-heading"><?php echo lang('Autorize please'); ?></div>
	<label for="inputLogin" class="sr-only"><?php echo lang('Login'); ?></label>
	<input type="text" id="inputLogin" class="form-control" placeholder="Login" required autofocus name="login">
	<label for="inputPass" class="sr-only"><?php echo lang('Password'); ?></label>
	<input type="password" id="inputPass" class="form-control" placeholder="Password" required autofocus name="pass">
<!--	<div class="checkbox">
		<label>
			<input type="checkbox" value="remember-me"> <?php echo lang('Remember me'); ?>
		</label>
	</div>-->
	<button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo lang('Enter'); ?></button>
</form>
<?php load_module('admin/admin','_finish'); ?>
