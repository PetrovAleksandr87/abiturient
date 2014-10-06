<?php
/* @var $this SpecController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Specs',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Специальности</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
