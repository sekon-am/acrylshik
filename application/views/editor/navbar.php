	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?php echo lang('Akrilshik editor panel'); ?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('editor/articles'); ?>"><?php echo lang('Articles'); ?></a></li>
					<li><a href="<?php echo site_url('editor/products'); ?>"><?php echo lang('Products'); ?></a></li>
					<li><a href="<?php echo site_url('editor/portfolio'); ?>"><?php echo lang('Portfolio'); ?></a></li>
				</ul>
			</div>
		</div>
	</nav>