<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-md-6">
			<?php echo $form->labelEx($model,'title'); ?>
			<?php echo $form->textField($model,'title',
				array('class'=> 'form-control')); ?>
			<?php echo $form->error($model,'title'); ?>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-6">
			<?php echo $form->labelEx($model,'text'); ?>
			<?php echo $form->textArea($model,'text',
				array('class'=> 'form-control')); ?>
			<?php echo $form->error($model,'text'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<?php echo $form->labelEx($model,'img_path'); ?>
			<?php echo $form->textField($model,'img_path',
				array('class'=> 'form-control')); ?>
			<?php echo $form->error($model,'img_path'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<?php echo $form->labelEx($model,'url_path'); ?>
			<?php echo $form->textField($model,'url_path',
				array('class'=> 'form-control')); ?>
			<?php echo $form->error($model,'url_path'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',
				array('class' => 'btn')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->