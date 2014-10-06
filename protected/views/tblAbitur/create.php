<?php
/* @var $this TblAbiturController */
/* @var $model TblAbitur */

$this->breadcrumbs=array(
	'Tbl Abiturs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список абитуриентов', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Добавление</h1><!--Create TblAbitur-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>