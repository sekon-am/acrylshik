<form action="<?php echo site_url("admin/login"); ?>" method="post">
<input type="text" name="login" value="<?php echo $login; ?>"/>
<input type="password" name="pass"/>
<input type="submit" value="<?php echo $lang('enter'); ?>"/>
</form>