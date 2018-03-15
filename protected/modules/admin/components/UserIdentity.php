<?php

ob_start();

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;
    public $role;
    public $username;
    public $password;
//    public $errorCode = false;

    const ERROR_EMAIL_INVALID = 3;
    const ERROR_STATUS_NOTACTIV = 4;
    const ERROR_STATUS_BAN = 5;
    
    
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $user = Users::model()->find(array('condition' => "username = '$this->username' AND deleted = 0"));
        if ($user !== null){
            if (md5($this->password) !== $user->password){
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            } else if ($user->status == 0){
                $this->errorCode = self::ERROR_STATUS_NOTACTIV;
            } else {
                if($user->role == 'admin'){
                    $info = Admins::model()->findByPk($user->relation);
                } else if ($user->role == 'company') {
                    $info = Contacts::model()->findByPk($user->relation);
                } else if ($user->role == 'data_entry') {
                    $info = DataEntry::model()->findByPk($user->relation);
                } else if ($user->role == 'inspector') {
                    $info = Inspectors::model()->findByPk($user->relation);
                }
                Yii::app()->user->id = $user->id;
                Yii::app()->user->name = $user->username;
                Yii::app()->session['first_name'] = $info->first_name;
                Yii::app()->session['last_name'] = $info->last_name;
                Yii::app()->session['role'] = $user->role;
            }
            return !$this->errorCode;
        } else {
            return $this->errorCode;
        }
    }

    /**
     * @return integer the ID of the user record
     */
    public function getId() {
        return $this->_id;
    }

}
