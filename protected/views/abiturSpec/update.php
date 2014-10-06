<?php
/* @var $this AbiturSpecController */
/* @var $model AbiturSpec */

$this->breadcrumbs=array(
	'Abitur Specs'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AbiturSpec', 'url'=>array('index')),
	array('label'=>'Create AbiturSpec', 'url'=>array('create')),
	array('label'=>'View AbiturSpec', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage AbiturSpec', 'url'=>array('admin')),
);
?>

<h1>Update AbiturSpec <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>