<?php
/* @var $this TblAbiturController */
/* @var $data TblAbitur */
?>

<div class="view">

<?php $image = CHtml::image(Yii::app()->baseUrl.'/images/'.$data->Id.'_min.jpg',
	'$data->Id',
	array(
        'onmouseover'=>'this.src="'.Yii::app()->baseUrl.'/images/'.$data->Id.'.jpg";',
		'onmouseout'=>'this.src="'.Yii::app()->baseUrl.'/images/'.$data->Id.'_min.jpg";',
	));
echo CHtml::link($image, Yii::app()->baseUrl.'/images/1.jpg'); ?>
<br />

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