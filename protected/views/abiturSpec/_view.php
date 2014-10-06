<?php
/* @var $this AbiturSpecController */
/* @var $data AbiturSpec */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('AbiturId')); ?>:</b>
	<?php echo TblAbitur::getAbiturNameFromID($data->AbiturId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SpecId')); ?>:</b>
	<?php echo Spec::getSpecNameFromID($data->SpecId); ?>
	<br />


</div>