<?php
/* @var $this AbiturSpecController */
/* @var $model AbiturSpec */

$this->breadcrumbs=array(
	'Abitur Specs'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List AbiturSpec', 'url'=>array('index')),
	array('label'=>'Create AbiturSpec', 'url'=>array('create')),
	array('label'=>'Update AbiturSpec', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete AbiturSpec', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AbiturSpec', 'url'=>array('admin')),
);
?>

<h1>View AbiturSpec #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'AbiturId',
		//'SpecId',
		'abitur' => array( 
			'name' => 'Абитуриент', 
			'value' => TblAbitur::getAbiturInfoFromID($model->AbiturId),
		),
		'spec' => array( 
		   'name' => 'Специальность',
		   'value' => Spec::getSpecNameFromID($model->SpecId),
		),
	),
)); ?>
