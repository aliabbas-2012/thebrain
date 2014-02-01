<?php

class ChangeUser extends Users {

    public $password_new;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.


        $rules = array(
            array('password_new', 'compare', 'compareAttribute' => 'pwd_repeat'),
                // The following rule is used by search().
                // Please remove those attributes that should not be searched.
        );
        $rules = array_merge(parent::rules(), $rules);
        #CVarDumper::dump($rules,10,true);
        return $rules;
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bsp_user';
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return BspUser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 
     * @return type
     */
    public function afterFind() {
        $this->pwd_repeat = "";
        $this->password = "";
        return parent::afterFind();
    }

    /**
     * 
     * @return type
     */
    public function afterSave() {
        $this->uploadBgAvtar();
        return parent::afterSave();
    }

    /**
     * upload avatar from offer page
     */
    public function uploadBgAvtar() {
        $path = $upload_path = DTUploadedFile::getFolderPath(array("temp", Yii::app()->user->id, get_class($this)));
        $path.="Users_background" . DIRECTORY_SEPARATOR;

        if (is_file($path . $this->avatar)) {

            copy($path . $this->avatar, DTUploadedFile::creeatRecurSiveDirectories(array(get_class($this), $this->primaryKey, "avatar")) . $this->avatar);
            unlink($path . $this->avatar);
        }
    }

}

?>
