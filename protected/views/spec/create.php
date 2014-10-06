<?php
/* @var $this SpecController */
/* @var $model Spec */

$this->breadcrumbs=array(
	'Specs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список специальностей', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создание</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>