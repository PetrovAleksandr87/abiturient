<?php
/* @var $this AbiturSpecController */
/* @var $model AbiturSpec */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AbiturId'); ?>
		<?php echo $form->textField($model,'AbiturId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SpecId'); ?>
		<?php echo $form->textField($model,'SpecId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->