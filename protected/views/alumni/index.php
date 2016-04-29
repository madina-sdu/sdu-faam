<div class="container">
	<?php
	/* @var $this NewsController */
	/* @var $dataProvider CActiveDataProvider */

	$this->breadcrumbs=array(
		'Alumnis',
	);

	?>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'pager' => array(
	    )
	)); ?>
</div>