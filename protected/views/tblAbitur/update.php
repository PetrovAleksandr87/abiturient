<?php
/* @var $this TblAbiturController */
/* @var $model TblAbitur */

$this->breadcrumbs=array(
	'Tbl Abiturs'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'Список абитуриентов', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Обновление данных абитуриента <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>