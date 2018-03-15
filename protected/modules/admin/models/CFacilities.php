<?php

/**
 * This is the model class for table "company_facilities".
 *
 * The followings are the available columns in table 'company_facilities':
 * @property string $id
 * @property string $company
 * @property string $facility
 * @property string $type
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 * @property integer $status
 * @property integer $deleted
 */
class CFacilities extends BaseModel {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'company_facilities';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, company, facility, type, created_by, modified_by, date_entered, date_modified', 'required'),
            array('status, deleted', 'numerical', 'integerOnly' => true),
            array('id, company, facility, created_by, modified_by', 'length', 'max' => 36),
            array('type', 'length', 'max' => 3),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, company, facility, type, created_by, modified_by, date_entered, date_modified, status, deleted', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'company' => 'Company',
            'facility' => 'Facility',
            'type' => 'Type',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('company', $this->company, true);
        $criteria->compare('facility', $this->facility, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('created_by', $this->created_by, true);
        $criteria->compare('modified_by', $this->modified_by, true);
        $criteria->compare('date_entered', $this->date_entered, true);
        $criteria->compare('date_modified', $this->date_modified, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('deleted', $this->deleted);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function get_facilities($id) {
        $count = Yii::app()->db->createCommand("SELECT COUNT(*) FROM `company_facilities` c, facilities f WHERE c.company = '$id' AND f.id = c.facility")->queryScalar();
        $sql = "SELECT c.type,f.* FROM `company_facilities` c, facilities f WHERE c.company = '$id' AND f.id = c.facility";
        $dataProvider = new CSqlDataProvider($sql, array(
            'totalItemCount' => $count,
            'sort' => array(
                'attributes' => array(
                ),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));

        return $dataProvider;
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return CFacilities the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
