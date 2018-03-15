<?php

/**
 * This is the model class for table "companies".
 *
 * The followings are the available columns in table 'companies':
 * @property string $id
 * @property string $name
 * @property string $profile_pic
 * @property string $jewish
 * @property string $url
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $country
 * @property string $lat
 * @property string $lng
 * @property string $kc_address
 * @property string $kc_address2
 * @property string $kc_city
 * @property string $kc_state
 * @property integer $kc_zip
 * @property string $kc_country
 * @property string $kc_lat
 * @property string $kc_lng
 * @property string $kc_comp_notes
 * @property string $overview
 * @property string $ar
 * @property string $rc
 * @property string $admin
 * @property string $email
 * @property string $email2
 * @property integer $phone
 * @property integer $phone2
 * @property integer $phone3
 * @property string $contract_type
 * @property string $active
 * @property string $contract_start
 * @property string $contract_exp
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 * @property integer $status
 * @property integer $deleted
 */
class Companies extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'companies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name, jewish, address, city, state, zip, country, lat, lng, kc_address, kc_city, kc_state, kc_zip, kc_country, kc_lat, kc_lng, ar, rc, admin, email, phone, active, contract_start, contract_exp, created_by, modified_by, date_entered, date_modified', 'required'),
			array('zip, kc_zip, phone, phone2, phone3, status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, ar, rc, admin, created_by, modified_by', 'length', 'max'=>36),
			//array('profile_pic', 'file', 'types'=>'jpg, gif, png'),
			//array('profile_pic','required','on'=>'create'),
			array('url', 'url'),
			array('email, email2', 'email'),
			array('name, url', 'length', 'max'=>512),
			array('profile_pic, email, email2', 'length', 'max'=>256),
			array('jewish', 'length', 'max'=>7),
			array('address, address2, kc_address, kc_address2', 'length', 'max'=>128),
			array('city, state, country, kc_city, kc_state, kc_country', 'length', 'max'=>64),
			array('lat, lng, kc_lat, kc_lng', 'length', 'max'=>32),
			array('contract_type', 'length', 'max'=>2),
			array('active', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, profile_pic, jewish, url, address, address2, city, state, zip, country, lat, lng, kc_address, kc_address2, kc_city, kc_state, kc_zip, kc_country, kc_lat, kc_lng, kc_comp_notes, overview, ar, rc, admin, email, email2, phone, phone2, phone3, contract_type, active, contract_start, contract_exp, created_by, modified_by, date_entered, date_modified, status, deleted', 'safe', 'on'=>'search'),
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
			'first_name' => 'Name',
			'profile_pic' => 'Profile Pic',
			'jewish' => 'Jewish',
			'url' => 'Url',
			'address' => 'Address',
			'address2' => 'Address2',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'country' => 'Country',
			'lat' => 'Lat',
			'lng' => 'Lng',
			'kc_address' => 'Kc Address',
			'kc_address2' => 'Kc Address2',
			'kc_city' => 'Kc City',
			'kc_state' => 'Kc State',
			'kc_zip' => 'Kc Zip',
			'kc_country' => 'Kc Country',
			'kc_lat' => 'Kc Lat',
			'kc_lng' => 'Kc Lng',
			'kc_comp_notes' => 'Kc Comp Notes',
			'overview' => 'Overview',
			'ar' => 'Ar',
			'rc' => 'Rc',
			'admin' => 'Admin',
			'email' => 'Email',
			'email2' => 'Email2',
			'phone' => 'Phone',
			'phone2' => 'Phone2',
			'phone3' => 'Phone3',
			'contract_type' => 'Contract Type',
			'active' => 'Active',
			'contract_start' => 'Contract Start',
			'contract_exp' => 'Contract Exp',
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
		$criteria->compare('profile_pic',$this->profile_pic,true);
		$criteria->compare('jewish',$this->jewish,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lng',$this->lng,true);
		$criteria->compare('kc_address',$this->kc_address,true);
		$criteria->compare('kc_address2',$this->kc_address2,true);
		$criteria->compare('kc_city',$this->kc_city,true);
		$criteria->compare('kc_state',$this->kc_state,true);
		$criteria->compare('kc_zip',$this->kc_zip);
		$criteria->compare('kc_country',$this->kc_country,true);
		$criteria->compare('kc_lat',$this->kc_lat,true);
		$criteria->compare('kc_lng',$this->kc_lng,true);
		$criteria->compare('kc_comp_notes',$this->kc_comp_notes,true);
		$criteria->compare('overview',$this->overview,true);
		$criteria->compare('ar',$this->ar,true);
		$criteria->compare('rc',$this->rc,true);
		$criteria->compare('admin',$this->admin,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('phone2',$this->phone2);
		$criteria->compare('phone3',$this->phone3);
		$criteria->compare('contract_type',$this->contract_type,true);
		$criteria->compare('active',$this->active,true);
		$criteria->compare('contract_start',$this->contract_start,true);
		$criteria->compare('contract_exp',$this->contract_exp,true);
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
	
	public function arRcSearch($id, $type)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('profile_pic',$this->profile_pic,true);
		$criteria->compare('jewish',$this->jewish,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lng',$this->lng,true);
		$criteria->compare('kc_address',$this->kc_address,true);
		$criteria->compare('kc_address2',$this->kc_address2,true);
		$criteria->compare('kc_city',$this->kc_city,true);
		$criteria->compare('kc_state',$this->kc_state,true);
		$criteria->compare('kc_zip',$this->kc_zip);
		$criteria->compare('kc_country',$this->kc_country,true);
		$criteria->compare('kc_lat',$this->kc_lat,true);
		$criteria->compare('kc_lng',$this->kc_lng,true);
		$criteria->compare('kc_comp_notes',$this->kc_comp_notes,true);
		$criteria->compare('overview',$this->overview,true);
		
		if($type == 'ar')
			$criteria->compare('ar',$id,true);
		else
			$criteria->compare('rc',$id,true);
		
		$criteria->compare('admin',$this->admin,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('phone2',$this->phone2);
		$criteria->compare('phone3',$this->phone3);
		$criteria->compare('contract_type',$this->contract_type,true);
		$criteria->compare('active',$this->active,true);
		$criteria->compare('contract_start',$this->contract_start,true);
		$criteria->compare('contract_exp',$this->contract_exp,true);
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
	 * @return Companies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
