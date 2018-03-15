<?php

/**
 * This is the model class for table "contacts".
 *
 * The followings are the available columns in table 'contacts':
 * @property string $id
 * @property string $link_id
 * @property string $first_name
 * @property string $last_name
 * @property string $type
 * @property string $email
 * @property integer $office
 * @property integer $mobile
 * @property string $comments
 * @property string $role
 * @property integer $is_primary
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modifed
 * @property integer $status
 * @property integer $deleted
 */
class Contacts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contacts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, link_id, first_name, last_name, type, email, office, mobile, role, created_by, modified_by, date_entered, date_modifed', 'required'),
			array('office, mobile, is_primary, status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, link_id, created_by, modified_by', 'length', 'max'=>36),
			array('first_name, last_name', 'length', 'max'=>128),
			array('type', 'length', 'max'=>8),
			array('email', 'length', 'max'=>64),
			array('role', 'length', 'max'=>7),
			array('comments', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, link_id, first_name, last_name, type, email, office, mobile, comments, role, is_primary, created_by, modified_by, date_entered, date_modifed, status, deleted', 'safe', 'on'=>'search'),
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
			'link_id' => 'Link',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'type' => 'Type',
			'email' => 'Email',
			'office' => 'Office',
			'mobile' => 'Mobile',
			'comments' => 'Comments',
			'role' => 'Role',
			'is_primary' => 'Is Primary',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
			'date_entered' => 'Date Entered',
			'date_modifed' => 'Date Modifed',
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
		$criteria->compare('link_id',$this->link_id,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('office',$this->office);
		$criteria->compare('mobile',$this->mobile);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('is_primary',$this->is_primary);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_modifed',$this->date_modifed,true);
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
	 * @return Contacts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
