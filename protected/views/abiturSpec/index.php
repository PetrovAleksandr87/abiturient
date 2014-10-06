<?php
/* @var $this AbiturSpecController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Abitur Specs',
);

$this->menu=array(
	array('label'=>'Create AbiturSpec', 'url'=>array('create')),
	array('label'=>'Manage AbiturSpec', 'url'=>array('admin')),
);
?>

<h1>Abitur Specs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
