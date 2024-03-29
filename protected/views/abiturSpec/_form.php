<?php
/* @var $this AbiturSpecController */
/* @var $model AbiturSpec */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'abitur-spec-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'AbiturId'); ?>
		<?php echo $form->dropDownList($model, 'AbiturId', CHtml::listData(TblAbitur::model()->findAll(), 'Id', 'FIO')); ?>
		<!-- echo CHtml::dropDownList('AbiturId', $model, $model->getAbiturMassive()); -->
		<!-- CHtml::dropDownList( -->
		<?php echo $form->error($model,'AbiturId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SpecId'); ?>
		<!-- echo $form->textField($model,'SpecId');-->
		<?php echo $form->dropDownList($model, 'SpecId', CHtml::listData(Spec::model()->findAll(), 'Id', 'Name')); ?>
		<!---->
		<?php echo $form->error($model,'SpecId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	
	

<?php $this->endWidget(); ?>

</div><!-- form -->