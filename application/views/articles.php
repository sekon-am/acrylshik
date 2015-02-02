	<article class="articles block-wrap">
			<h3 class="h1">Статьи и обзары</h3>
			<p class="h1-descr">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты</p>
			<div class="hr"></div>
			<?php foreach($articles as $article): ?>
			<div class="article" data-link="<?php echo $article->url; ?>">
				<div class="image-wrap">
					<div class="image" style="background-image:url(<?php echo $article->img; ?>);"></div>
				</div>
				<a href="<?php echo $article->url; ?>"><h2><?php echo $article->title; ?></h2></a>
				<div class="sign"><?php echo $article->sign; ?></div>
				<div class="short"><?php echo $article->short; ?></div>
			</div>
			<?php endforeach; ?>
		<a class="go-top" href="#"><span>&uArr;</span></a>	
	</article>
