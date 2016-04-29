<div class="container">
	<?php

	$this->breadcrumbs=array(
		'Home'=> '/',
		'Alumnis'=>'/alumni',
		$alumni->name
	);
	?>

		<h1 class="news__title"><?=$alumni->name?></h1>
		<p class="news__datetime"><?=$alumni->dateString?></p>
		<div class="well well-lg">
			<img src="<?=$alumni->img_path?>" class="rector__image">
			<p class="alumni__text"><?=$alumni->text?></p>
		</div>
	
	
</div>