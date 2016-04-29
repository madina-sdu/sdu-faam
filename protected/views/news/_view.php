
<div class="well__news well-lg">
	
	<img src="<?=$data->img_path?>" class="news__image" width="270px" height="150px">
	<h3 class="news__title-common"><a href="/news/<?=$data->url_path?>"><?=$data->title?></a></h3>
	<div class="news__text-container">
		<p class="news__text"><?=$data->ontroText?> ..... </p>
	</div>
	<div class="news__readmore">
		<p><a href="/news/<?=$data->url_path?>" class="btn btn-info" role="button">Read more</a> </p>
	</div>
	<p class="news__datetime"><?=$data->dateString?></p>

</div>
