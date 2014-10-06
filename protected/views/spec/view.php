<?php
/* @var $this SpecController */
/* @var $model Spec */

$this->breadcrumbs=array(
	'Specs'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'Список специальностей', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр специальности #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'Id',*/
		'Name',
	),
)); ?>
