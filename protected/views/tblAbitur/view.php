<?php
/* @var $this TblAbiturController */
/* @var $model TblAbitur */

$this->breadcrumbs=array(
	'Tbl Abiturs'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'Список абитуриентов', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр данных абитуриента #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'Id',*/
		'FIO',
		'Pasport',
		'EGE1',
		'EGE2',
		'EGE3',
	),
)); ?>
