<?php

/**
 * This is the model class for table "tbl_abitur".
 *
 * The followings are the available columns in table 'tbl_abitur':
 * @property integer $Id
 * @property string $FIO
 * @property string $Pasport
 * @property integer $EGE1
 * @property integer $EGE2
 * @property integer $EGE3
 */
class TblAbitur extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_abitur';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FIO, Pasport', 'required'),
			array('EGE1, EGE2, EGE3', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, FIO, Pasport, EGE1, EGE2, EGE3', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'FIO' => 'ФИО',
			'Pasport' => 'Паспорт',
			'EGE1' => 'Физика',
			'EGE2' => 'Математика',
			'EGE3' => 'Русский',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('FIO',$this->FIO,true);
		$criteria->compare('Pasport',$this->Pasport,true);
		$criteria->compare('EGE1',$this->EGE1);
		$criteria->compare('EGE2',$this->EGE2);
		$criteria->compare('EGE3',$this->EGE3);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblAbitur the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	// этот метод находит наименование категории по ее идентификатору
	public static function getAbiturNameFromID($id)
	{
		// осуществляем поиск категории по ее id
		$model = TblAbitur::model()->find('Id = :id', array(':id' => $id));

		// если категория найдена, то возвращаем ее наименование
		if(count($model) > 0)
			return $model->FIO;
		// если категория не найдена, то возвращаем строку "Категория отсутствует"
		else
			return 'Аб отсутствует';
	}
	
	// этот метод находит наименование категории по ее идентификатору
	public static function getAbiturPasportFromID($id)
	{
		// осуществляем поиск категории по ее id
		$model = TblAbitur::model()->find('Id = :id', array(':id' => $id));

		// если категория найдена, то возвращаем ее наименование
		if(count($model) > 0)
			return $model->Pasport;
		// если категория не найдена, то возвращаем строку "Категория отсутствует"
		else
			return 'Аб отсутствует';
	}
	
	public static function getAbiturInfoFromID($id)
	{
		// осуществляем поиск категории по ее id
		$model = TblAbitur::model()->find('Id = :id', array(':id' => $id));

		// если категория найдена, то возвращаем ее наименование
		if(count($model) > 0)
		{
			return $model->FIO.' '.$model->Pasport;
		}
		// если категория не найдена, то возвращаем строку "Категория отсутствует"
		else
			return 'Аб отсутствует';
	}
	
	// этот метод генерирует массив category_id => category_name для фильтра CGridView 
	public static function generateAbiturMassive() 
	{ 
		// ищем все категории (findAll) 
		$model = TblAbitur::model()->findAll(); 

		// создаем массив 
		$result = array(); 

		// просматриваем все найденные записи и добавляем в массив $result 
		// все значения в виде пар 
		foreach($model as $buf) 
			$result += array($buf->Id => $buf->FIO); 

		// возвращаем полученный результат 
		return $result; 
	} 
	
	// этот метод генерирует массив category_id => category_name для фильтра CGridView 
	public static function generateAbiturPasportMassive() 
	{ 
		// ищем все категории (findAll) 
		$model = TblAbitur::model()->findAll(); 

		// создаем массив 
		$result = array(); 

		// просматриваем все найденные записи и добавляем в массив $result 
		// все значения в виде пар 
		foreach($model as $buf) 
			$result += array($buf->Id => $buf->Pasport); 

		// возвращаем полученный результат 
		return $result; 
	} 
}
