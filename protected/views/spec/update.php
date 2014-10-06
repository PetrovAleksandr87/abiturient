<?php
/* @var $this SpecController */
/* @var $model Spec */

$this->breadcrumbs=array(
	'Specs'=>array('index'),
	$model->Name=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'Список специальностей', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Редактирование <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>