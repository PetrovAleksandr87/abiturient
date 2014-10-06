<?php
/* @var $this TblAbiturController */
/* @var $model TblAbitur */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-abitur-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FIO'); ?>
		<?php echo $form->textField($model,'FIO'); ?>
		<?php echo $form->error($model,'FIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pasport'); ?>
		<?php echo $form->textField($model,'Pasport'); ?>
		<?php echo $form->error($model,'Pasport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EGE1'); ?>
		<?php echo $form->textField($model,'EGE1'); ?>
		<?php echo $form->error($model,'EGE1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EGE2'); ?>
		<?php echo $form->textField($model,'EGE2'); ?>
		<?php echo $form->error($model,'EGE2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EGE3'); ?>
		<?php echo $form->textField($model,'EGE3'); ?>
		<?php echo $form->error($model,'EGE3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->