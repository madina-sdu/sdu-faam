<?php

/**
 * This is the model class for table "alumni".
 *
 * The followings are the available columns in table 'alumni':
 * @property integer $id
 * @property string $name
 * @property string $country
 * @property string $img_path
 * @property string $url_path
 * @property double $point
 */
class Alumni extends CActiveRecord
{
	const INRTO_LENGTH = 300;
	const PAGE_SIZE = 7;


	public function tableName()
	{
		return 'alumni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, country, city, university, faculty, year, course, fall, img_path, url_path, text, point', 'required'),
			array('point', 'numerical'),
			array('name, country, city, university, img_path, url_path', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, country, img_path, url_path, point', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'country' => 'Country',
			'city' => 'City',
			'university' => 'University',
			'faculty' => 'Faculty',
			'year' => 'Year',
			'course' => 'Course',
			'fall' => 'Fall',
			'img_path' => 'Img Path',
			'url_path' => 'Url Path',
			'text' => 'Text',
			'point' => 'Point',
			'create_time' => 'Create time',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('university',$this->university,true);
		$criteria->compare('faculty',$this->faculty,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('course',$this->university,true);
		$criteria->compare('fall',$this->fall,true);
		$criteria->compare('img_path',$this->img_path,true);
		$criteria->compare('url_path',$this->url_path,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('point',$this->point);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
		public function getIntroText()
	{
		return mb_substr($this->text, 1, Alumni::INRTO_LENGTH);
	}
		public function getFirstLetter()
	{
		return mb_substr($this->text, 0,1);
	}
	public function getDateString()
	{
		return Yii::app()->dateFormatter->format('d MMMM y, H:mm', strtotime($this->create_time));
	}
}
