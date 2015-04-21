	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url('editor/dashboard'); ?>"><?php echo lang('Akrilshik editor panel'); ?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('/manarticle/lst'); ?>"><?php echo lang('Articles'); ?></a></li>
					<li><a href="<?php echo site_url('/manproduct/lst'); ?>"><?php echo lang('Products'); ?></a></li>
					<li><a href="<?php echo site_url('/manportfolio/lst'); ?>"><?php echo lang('Portfolio'); ?></a></li>
					<li><a href="<?php echo site_url('/mancats'); ?>"><?php echo lang('Categories'); ?></a></li>
					<li><a href="<?php echo site_url('/manarticle4cat'); ?>"><?php echo lang('Articles Cats'); ?></a></li>
					<li><a href="<?php echo site_url('/authorize/logout'); ?>"><?php echo lang('Logout'); ?></a></li>
				</ul>
			</div>
		</div>
	</nav>
	