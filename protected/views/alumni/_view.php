<div class="well__news well-lg">

	<div class="col-md-4">
		<img src="<?=$data->img_path?>" class="alumni__image">
	</div>

	<div class="col-md-4">
		<h3 class="alumni__title-common"><strong><?=$data->name?></strong></h3></br>
				<p ><strong>City:</strong> <a href="#"><?=$data->city?></a>, <a href="#"><?=$data->country?></a></p>
				<p><strong>University:</strong> <a href="#"><?=$data->university?></a></p>
				<p><strong>Faculty:</strong> <a href="#"><?=$data->faculty?></a></p>
				<p><strong>Year:</strong> <a href="#"><?=$data->year?></a></p>
				<p><strong>Course:</strong> <a href="#"><?=$data->course?></a></p>
				<p><strong>Fall:</strong> <a href="#"><?=$data->fall?></a></p>
				<p><strong>Overall point:</strong> <a href="#"><?=$data->point?></a></p>
	</div>
			
	<div class="col-md-4">
		<div class="alumni__text-container">
			<p class="alumni__text"><span><?=$data->firstLetter?></span><?=$data->introText?> ..... </p>
			<p class="news__datetime"><?=$data->dateString?></p>
					
			<div class="alumni__readmore">
				<p><a href="/alumni/<?=$data->url_path?>" class="btn btn-info" role="button">Read more</a> </p>
			</div>
		</div>
	</div>
	
</div>


	<div class="alumni__fixed-button">
		<a href="#" role="button">Leave feedback</a>
	</div>
