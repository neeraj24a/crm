<?php

/**
 * This is the model class for table "inspections".
 *
 * The followings are the available columns in table 'inspections':
 * @property string $id
 * @property string $company_id
 * @property string $facility_id
 * @property string $inspector
 * @property string $insp_date
 * @property integer $issues
 * @property string $resolved_status
 * @property string $report
 * @property string $notes
 * @property string $attachment
 * @property integer $special
 * @property integer $initial
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 */
class Inspections extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inspections';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, company_id, facility_id, inspector, insp_date, special, created_by, modified_by, date_entered, date_modified', 'required'),
			array('issues, special, initial, status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, company_id, facility_id, inspector, created_by, modified_by', 'length', 'max'=>36),
			array('resolved_status', 'length', 'max'=>8),
			array('report', 'length', 'max'=>9999),
			array('notes', 'length', 'max'=>999),
			array('attachment', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_id, facility_id, inspector, insp_date, issues, resolved_status, report, notes, attachment, special, initial, status, deleted, created_by, modified_by, date_entered, date_modified', 'safe', 'on'=>'search'),
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
			'company_id' => 'Company',
			'facility_id' => 'Facility',
			'inspector' => 'Inspector',
			'insp_date' => 'Insp Date',
			'issues' => 'Issues',
			'resolved_status' => 'Resolved Status',
			'report' => 'Report',
			'notes' => 'Notes',
			'attachment' => 'Attachment',
			'special' => 'Special',
			'initial' => 'Initial',
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
		$criteria->compare('company_id',$this->company_id,true);
		$criteria->compare('facility_id',$this->facility_id,true);
		$criteria->compare('inspector',$this->inspector,true);
		$criteria->compare('insp_date',$this->insp_date,true);
		$criteria->compare('issues',$this->issues);
		$criteria->compare('resolved_status',$this->resolved_status,true);
		$criteria->compare('report',$this->report,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('attachment',$this->attachment,true);
		$criteria->compare('special',$this->special);
		$criteria->compare('initial',$this->initial);
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
	 * @return Inspections the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
