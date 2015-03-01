<?php load_view('admin/start'); ?>
<form action="<?php echo site_url("authorize/login"); ?>" method="post" class="form-signin container" id='login-form'>
	<div class="form-signin-heading"><?php echo lang('Autorize please'); ?></div>
	<?php if($msg): ?>
	<div class="bg-danger errors"><?php echo $msg; ?></div>
	<?php endif; ?>
	<label for="inputLogin" class="sr-only"><?php echo lang('Login'); ?></label>
	<input type="text" id="inputLogin" class="form-control" placeholder="Login" required autofocus name="login">
	<label for="inputPass" class="sr-only"><?php echo lang('Password'); ?></label>
	<input type="password" id="inputPass" class="form-control" placeholder="Password" required autofocus name="pass">
<!--	<div class="checkbox">
		<label>
			<input type="checkbox" value="remember-me"> <?php echo lang('Remember me'); ?>
		</label>
	</div>-->
	<input type="hidden" name="submit" value="1"/>
	<button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo lang('Enter'); ?></button>
</form>
<?php load_view('admin/finish'); ?>
