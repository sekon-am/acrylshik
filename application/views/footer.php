	<footer class="block-wide">
		<div class="footer-top">
			<div class="block-wrap">
				<div class="footer-column products">
					<h4><?php echo lang('hothothot'); ?></h4>
					<?php foreach ($products as $prod): ?>
					<div class="text-list-item">
						<a href="<?php echo $prod->url; ?>"><?php echo $prod->name; ?></a>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="footer-column works">
					<h4><?php echo lang('portfolio'); ?></h4>
				</div>
				<div class="footer-column articles">
					<h4><?php echo lang('Articles'); ?></h4>
					<?php foreach($articles as $article): ?>
					<div class="text-list-item">
						<a href="<?php echo $article->url; ?>"><?php echo $article->title; ?></a>
					</div>
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
