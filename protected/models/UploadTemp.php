<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class UploadTemp extends CFormModel {

    public $upload_temp_image;

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('upload_temp_image', 'file',  'allowEmpty' => true,
                'types' => 'jpg,jpeg,gif,png,JPG,JPEG,GIF,PNG'),
        );
    }

}

?>
