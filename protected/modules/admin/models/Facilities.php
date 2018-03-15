<?php

/**
 * This is the model class for table "facilities".
 *
 * The followings are the available columns in table 'facilities':
 * @property string $id
 * @property string $name
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $country
 * @property string $lat
 * @property string $lng
 * @property string $region
 * @property string $insp_occur
 * @property string $insp_cost
 * @property string $overview
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 * @property integer $status
 * @property integer $deleted
 */
class Facilities extends BaseModel
{
        public $type;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'facilities';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name, address, city, state, zip, country, lat, lng, insp_occur, created_by, modified_by, date_entered, date_modified', 'required'),
			array('type','required','on' => 'add'),
			array('zip, status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, created_by, modified_by', 'length', 'max'=>36),
			array('name', 'length', 'max'=>256),
			array('address, address2', 'length', 'max'=>128),
			array('city, state, country', 'length', 'max'=>64),
			array('lat, lng', 'length', 'max'=>32),
			array('insp_cost', 'length', 'max'=>16),
			array('region', 'length', 'max'=>512),
			array('insp_occur', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, address, address2, city, state, zip, country, lat, lng, region, insp_occur, insp_cost, overview, created_by, modified_by, date_entered, date_modified, status, deleted', 'safe', 'on'=>'search'),
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
			'address' => 'Address',
			'address2' => 'Address2',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'country' => 'Country',
			'lat' => 'Lat',
			'lng' => 'Lng',
                        'type' => 'Type',
			'region' => 'Region',
			'insp_occur' => 'Insp Occur',
			'insp_cost' => 'Insp Cost',
			'overview' => 'Overview',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
			'date_entered' => 'Date Entered',
			'date_modified' => 'Date Modified',
			'status' => 'Status',
			'deleted' => 'Deleted',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lng',$this->lng,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('insp_occur',$this->insp_occur,true);
		$criteria->compare('insp_cost',$this->insp_cost,true);
		$criteria->compare('overview',$this->overview,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_modified',$this->date_modified,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('deleted',$this->deleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Facilities the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
