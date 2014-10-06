<?php
/* @var $this TblAbiturController */
/* @var $data TblAbitur */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIO')); ?>:</b>
	<?php echo CHtml::encode($data->FIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pasport')); ?>:</b>
	<?php echo CHtml::encode($data->Pasport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EGE1')); ?>:</b>
	<?php echo CHtml::encode($data->EGE1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EGE2')); ?>:</b>
	<?php echo CHtml::encode($data->EGE2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EGE3')); ?>:</b>
	<?php echo CHtml::encode($data->EGE3); ?>
	<br />


</div>