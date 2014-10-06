<?php
/* @var $this AbiturSpecController */
/* @var $model AbiturSpec */

$this->breadcrumbs=array(
	'Abitur Specs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AbiturSpec', 'url'=>array('index')),
	array('label'=>'Create AbiturSpec', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#abitur-spec-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Abitur Specs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'abitur-spec-grid',
	// источник данных
	'dataProvider'=>$model->search(),
	// фильтр
	'filter'=>$model,
	// текст описывающий общее количество элементов и количество элементов на текущей странице пагинатора
	//'summaryText' => "Элементы {start}&mdash;{end} из {count}",
	// текст выводимый при отсутствии записей в БД или когда все записи не удовлетворяют значениям фильтров
	//'emptyText' => '... не найдены',
	// заголовок пагинатора 
	'pager'=>array( 
	'header'=>'Навигация: '
	),
	// в этом массиве указываются и настраиваются столбцы, которые должны выводиться
	'columns'=>array(
		//'Id',
		//'AbiturId',
		//'SpecId',
		
		// для указания дополнительных настроек нужно создать массив array() и указать имя 
		// модифицируемого столбца (поля в базе данных) 
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
			'value' => 'TblAbitur::getAbiturNameFromID($data->AbiturId)', //'substr($data->article_text, 0, 10)."..."', 
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
		// теперь настроим вывод значения категории и фильтра 
		'spec' => array( 
		   'header' => 'Специальность', 
		   'name' => 'SpecId', 
		   'type' => 'raw', 
		   // получаем наименование категории по ее id через созданный нами статический метод getCategoryNameFromID, 
		   // который мы поместили в модель Category 
		   'value' => 'Spec::getSpecNameFromID($data->SpecId)', 
		   // генерируем фильтр просто подставив обычный массив состоящий из пар id_категории => наименование_категории 
		   // учтите что код Category::generateCategoryMassive() не нужно указывать в кавычках как в value 
		   'filter' => Spec::generateSpecMassive(), 
		),
		// добавляем массив с функциональными кнопками CButtonColumn, 
		// в нем по умолчанию указаны 3 кнопки - просмотра, редактирования и удаления {view} {update} {delete} 
		/*array( 
		   'class' => 'CButtonColumn', 
		   // зададим заголовок 
		   'header' => 'Функции', 
		   // добавим к трем стандартным кнопкам {view} {update} {delete} нашу {btnWorkmake} 
		   // через параметр template вы можете управлять содержимым этой колонки 
		   'template' => '{btnWorkmake} {view} {update} {delete}', 
		   // нашу новую кнопку btnWorkmake нужно описать в массиве buttons 
		   // если вы хотите изменить функционал стандартных кнопок, то просто переопределите их 
		   // в этом же массиве 
		   'buttons' => array ( 
			 'btnWorkmake' => array ( 
			   // указываем всплывающую подсказку 
			   'label'=>'Наша собственная кнопка', 
			   // указываем путь к нужному контроллеру и экшену в нем с article_id 
			   'url'=>'Yii::app()->createUrl("/article/showarticle/".$data->AbiturId)', 
			   // указываем "target"=>"_blank", т.е. наша кнопку будет показывать результат в новом окне 
			   'options' => array("target"=>"_blank"), 
			   // путь к изображению 
			   //'imageUrl' => Yii::app()->request->baseUrl.'/images/net.png', 
			 ), 
		   ), 
		   // т.к. мы добавили еще одну кнопку давайте немного расширим колонку 
		   'htmlOptions' => array('width' => 80), 
		),*/

		array(
			'class'=>'CButtonColumn',
			'header' => 'Функции',
		),  		
	),
)); ?>
