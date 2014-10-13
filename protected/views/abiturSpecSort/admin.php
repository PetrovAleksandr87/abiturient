<?php
/* @var $this AbiturSpecSortController */
/* @var $model AbiturSpecSort */

$this->breadcrumbs=array(
	'Abitur Spec Sorts'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List AbiturSpecSort', 'url'=>array('index')),
	array('label'=>'Create AbiturSpecSort', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#abitur-spec-sort-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Предварительный список к зачислению</h1>

<?php echo CHtml::dropDownList('SpecId', $model, CHtml::listData(Spec::model()->findAll(), 'Id', 'Name')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'abitur-spec-sort-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'abitur' => array( 
			// через аутрибут header можно указывать наименование колонки 
			'header' => 'ФИО', 
			// указываем наименование столбца 
			'name' => 'AbiturId', 
			// оставляем фильтр пустым 
			'filter' => TblAbitur::generateAbiturMassive(), 
			// указываем тип форматирования ячейки при выводе (type) равный raw, 
			// raw значит что поле форматироваться не будет и мы можем вписать в него скрипт 
			// тип ячейки может иметь и другие значения, например image 
			'type' => 'raw', 
			// теперь урежем поле текста до 10 символов 
			// учтите что скрипт должен находиться в кавычках, а обращаться к полю нужно через $data->имя_поля 
			'value' => 'TblAbitur::getAbiturNameFromID($data->AbiturId)',
		),
		'abiturPasport' => array( 
			// через аутрибут header можно указывать наименование колонки 
			'header' => 'Паспорт', 
			// указываем наименование столбца 
			'name' => 'AbiturId', 
			// оставляем фильтр пустым 
			'filter' => TblAbitur::generateAbiturPasportMassive(), 
			// указываем тип форматирования ячейки при выводе (type) равный raw, 
			// raw значит что поле форматироваться не будет и мы можем вписать в него скрипт 
			// тип ячейки может иметь и другие значения, например image 
			'type' => 'raw', 
			// учтите что скрипт должен находиться в кавычках, а обращаться к полю нужно через $data->имя_поля 
			'value' => 'TblAbitur::getAbiturPasportFromID($data->AbiturId)',
		),
		'abiturBally' => array( 
			'header' => 'Баллы', 
			'name' => 'Bally', 
			'type' => 'raw', 
			'value' => 'AbiturSpecSort::getBallyFromID($data->AbiturId)',
		),
		/*'abiturBally2' => array( 
			'header' => 'Баллы', 
			'name' => 'Bally', 
			'type' => 'raw', 
			'value' => '$data->abitur()->EGE1',
		),*/
		'abiturBally3' => array( 
			'header' => 'Баллы', 
			'name' => 'Bally3', 
			'type' => 'raw', 
			'value' => '$data->sumBally',
		),
	),
)); ?>
