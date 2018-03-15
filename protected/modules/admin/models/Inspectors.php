<?php

/**
 * This is the model class for table "inspectors".
 *
 * The followings are the available columns in table 'inspectors':
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $web_enabled
 * @property string $email
 * @property string $phone
 * @property string $phone2
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $org
 * @property string $url
 * @property integer $semi
 * @property string $semi_from
 * @property string $prev_agency
 * @property string $prev_positions
 * @property string $prev_years
 * @property integer $curr_employed
 * @property string $curr_employer
 * @property string $reg_travel_states
 * @property string $reg_travel_countries
 * @property string $expertise
 * @property string $acct_name
 * @property string $acct_num
 * @property string $bank_name
 * @property string $bank_address
 * @property string $swift
 * @property string $bic
 * @property string $routing
 * @property string $special_inst
 * @property string $route
 * @property string $assignments
 * @property string $notes
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 */
class Inspectors extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inspectors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, first_name, last_name, email, phone, phone2, address, city, state, zip, country, org, url, semi, semi_from, prev_agency, prev_positions, prev_years, curr_employed, curr_employer, reg_travel_states, reg_travel_countries, expertise, acct_name, acct_num, bank_name, bank_address, swift, bic, routing, special_inst, route, assignments, notes, status, created_by, modified_by, date_entered, date_modified', 'required'),
			array('web_enabled, semi, curr_employed, status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, phone, phone2, created_by, modified_by', 'length', 'max'=>36),
			array('first_name, last_name, org, url, acct_name, acct_num, bank_name, bank_address, swift, bic, routing, special_inst', 'length', 'max'=>128),
			array('email, address, city, state, country, semi_from, prev_agency, prev_positions, prev_years, curr_employer, reg_travel_states, reg_travel_countries, expertise, route, assignments, notes', 'length', 'max'=>255),
			array('zip', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, web_enabled, email, phone, phone2, address, city, state, zip, country, org, url, semi, semi_from, prev_agency, prev_positions, prev_years, curr_employed, curr_employer, reg_travel_states, reg_travel_countries, expertise, acct_name, acct_num, bank_name, bank_address, swift, bic, routing, special_inst, route, assignments, notes, status, deleted, created_by, modified_by, date_entered, date_modified', 'safe', 'on'=>'search'),
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
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'web_enabled' => 'Web Enabled',
			'email' => 'Email',
			'phone' => 'Phone',
			'phone2' => 'Phone2',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'country' => 'Country',
			'org' => 'Org',
			'url' => 'Url',
			'semi' => 'Semi',
			'semi_from' => 'Semi From',
			'prev_agency' => 'Prev Agency',
			'prev_positions' => 'Prev Positions',
			'prev_years' => 'Prev Years',
			'curr_employed' => 'Curr Employed',
			'curr_employer' => 'Curr Employer',
			'reg_travel_states' => 'Reg Travel States',
			'reg_travel_countries' => 'Reg Travel Countries',
			'expertise' => 'Expertise',
			'acct_name' => 'Acct Name',
			'acct_num' => 'Acct Num',
			'bank_name' => 'Bank Name',
			'bank_address' => 'Bank Address',
			'swift' => 'Swift',
			'bic' => 'Bic',
			'routing' => 'Routing',
			'special_inst' => 'Special Inst',
			'route' => 'Route',
			'assignments' => 'Assignments',
			'notes' => 'Notes',
			'status' => 'Status',
			'deleted' => 'Deleted',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
			'date_entered' => 'Date Entered',
			'date_modified' => 'Date Modified',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('web_enabled',$this->web_enabled);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('org',$this->org,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('semi',$this->semi);
		$criteria->compare('semi_from',$this->semi_from,true);
		$criteria->compare('prev_agency',$this->prev_agency,true);
		$criteria->compare('prev_positions',$this->prev_positions,true);
		$criteria->compare('prev_years',$this->prev_years,true);
		$criteria->compare('curr_employed',$this->curr_employed);
		$criteria->compare('curr_employer',$this->curr_employer,true);
		$criteria->compare('reg_travel_states',$this->reg_travel_states,true);
		$criteria->compare('reg_travel_countries',$this->reg_travel_countries,true);
		$criteria->compare('expertise',$this->expertise,true);
		$criteria->compare('acct_name',$this->acct_name,true);
		$criteria->compare('acct_num',$this->acct_num,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('bank_address',$this->bank_address,true);
		$criteria->compare('swift',$this->swift,true);
		$criteria->compare('bic',$this->bic,true);
		$criteria->compare('routing',$this->routing,true);
		$criteria->compare('special_inst',$this->special_inst,true);
		$criteria->compare('route',$this->route,true);
		$criteria->compare('assignments',$this->assignments,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inspectors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
