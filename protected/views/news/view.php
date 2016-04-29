<div class="container">
	<?php

	$this->breadcrumbs=array(
		'Home'=> '/',
		'News'=>'/news',
		$news->title
	);
	?>

		<h1 class="news__title"><?=$news->title?></h1>
		<p class="news__datetime"><?=$news->dateString?></p>
		<div class="well well-lg">
			<img src="<?=$news->img_path?>" class="rector__image">
			<p class="news__text"><?=$news->text?></p>
		</div>
	
	
</div>