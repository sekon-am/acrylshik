	<footer class="block-wide">
		<div class="footer-top">
			<div class="block-wrap">
				<div class="footer-column foot-products">
					<h4><?php echo lang('hothothot'); ?></h4>
					<?php foreach ($products as $prod): ?>
					<a href="<?php echo $prod->url; ?>"><?php echo $prod->name; ?></a>
					<?php endforeach; ?>
				</div>
				<div class="footer-column foot-portfolio">
					<h4><?php echo lang('portfolio'); ?></h4>
					<div class="portfolio-container">
					<?php foreach($portfolio as $work): ?>
						<div class="portfolio-icon" style="background-image:url(<?php echo $work->img; ?>);" data-link="<?php echo $work->url; ?>"></div>
					<?php endforeach; ?>
					</div>
				</div>
				<div class="footer-column foot-articles">
					<h4><?php echo lang('Articles'); ?></h4>
					<?php foreach($articles as $article): ?>
					<a href="<?php echo $article->url; ?>"><?php echo $article->title; ?></a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="block-wrap">
				<div class="copy lfloat">&copy; 2014 Akrilshik.ru</div>
				<div class="rfloat">
					<?php echo lang('Developed'); ?>
					<a href="http://digithive.ru">DigitHIVE</a>
				</div>
				<div class="footer-menu">
					<a href="#"><?php echo lang('About'); ?></a>&nbsp;|&nbsp;
					<a href="#"><?php echo lang('Contacts'); ?></a>&nbsp;|&nbsp;
					<a href="#"><?php echo lang('Site map'); ?></a></div>
			</div>
		</div>
	</footer>
</body>
</html>
