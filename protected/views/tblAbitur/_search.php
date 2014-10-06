<?php
/* @var $this TblAbiturController */
/* @var $model TblAbitur */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'FIO'); ?>
		<?php echo $form->textField($model,'FIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pasport'); ?>
		<?php echo $form->textField($model,'Pasport'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EGE1'); ?>
		<?php echo $form->textField($model,'EGE1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EGE2'); ?>
		<?php echo $form->textField($model,'EGE2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EGE3'); ?>
		<?php echo $form->textField($model,'EGE3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->