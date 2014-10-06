<?php
/* @var $this AbiturSpecController */
/* @var $model AbiturSpec */

$this->breadcrumbs=array(
	'Abitur Specs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AbiturSpec', 'url'=>array('index')),
	array('label'=>'Manage AbiturSpec', 'url'=>array('admin')),
);
?>

<h1>Create AbiturSpec</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>