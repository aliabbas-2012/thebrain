<?php

class zHtml extends CHtml {

    public static function enumDropDownList($model, $attribute, $htmlOptions = array()) {
        return CHtml::activeDropDownList($model, $attribute, self::enumItem($model, $attribute), $htmlOptions);
    }

    public static function enumItem($model, $attribute) {
        $attr = $attribute;
        self::resolveName($model, $attr);
        preg_match('/\((.*)\)/', $model->tableSchema->columns[$attr]->dbType, $matches);
        foreach (explode(',', $matches[1]) as $value) {
            $value = str_replace("'", null, $value);
            $values[$value] = Yii::t('enumItem', $value);
        }
        return $values;
    }

    /**
     * static link
     * of image
     * @param type $model
     * @param type $attribute
     */
    public static function imageLink($model, $attribute, $folder) {
        if (!$model->isNewRecord && !empty($model->$attribute)) {
            $path = Yii::app()->baseUrl . "/uploads/" . $folder . "/" . $model->primaryKey . "/" . $model->$attribute;

            return CHtml::link($model->$attribute, $path, array("target" => "_blank"));
        }
    }

    /**
     * static link
     * of image
     * @param type $model
     * @param type $attribute
     */
    public static function imageLinkRemove($model, $attribute, $folder) {
        if (!$model->isNewRecord && !empty($model->$attribute)) {
            $path = Yii::app()->baseUrl . "/uploads/" . $folder . "/" . $model->primaryKey . "/" . $model->$attribute;
            $link = CHtml::link($model->$attribute, $path, array("target" => "_blank", "id" => $attribute . "_image"));
            $url = Yii::app()->controller->createUrl("/site/deleteTemp", array(
                "action" => "removeactual",
                "id" => $model->id,
                "attribute" => $attribute,
                "model" => get_class($model))
            );
            $elments = CJSON::encode(array($attribute . "_remove", $attribute . "_image"));
            $updateElem = get_class($model) . "_" . $attribute;
            $removeLink = CHtml::link("Remove", "javascript.void(0)", array(
                        'onclick' => 'thepuzzleadmin.removeElementAjax("' . $url . '",' . $elments . ',"' . $updateElem . '");return false;',
                        "id" => $attribute . "_remove",
                            )
            );

            return $link . " " . $removeLink;
        }
    }

    /**
     * 
     * @param type $model$
     * @param type $attribute
     * @param type $attribute_name
     * @return type
     */
    public static function kendoUploader($model, $attribute, $attribute_name, $url = "", $options = array()) {
        $uploadTemp = new UploadTemp();
        $field = zHtml::activeFileField($uploadTemp, "upload_temp_image");
        $field.= zHtml::activeHiddenField($model, $attribute);
        $url = empty($url) ? Yii::app()->controller->createUrl("/site/uploadTemp") : $url;
        Yii::app()->getClientScript()->registerScript(__CLASS__ . '#' . $attribute, "
                            thepuzzleadmin.kendoUpload('" . get_class($uploadTemp) . "_" . "upload_temp_image" . "','" . $url . "');
		", CClientScript::POS_READY);

        return $field;
    }

    /**
     * 
     * @param type $model$
     * @param type $attribute
     * @param type $attribute_name
     * @return type
     */
    public static function kendoMultiUploader($index, $model, $attribute, $attribute_name, $url = "", $options = array()) {
        $uploadTemp = new UploadTemp();
        $field = zHtml::activeFileField($uploadTemp, '[' . $index . ']upload_temp_image');
        $field.= zHtml::activeHiddenField($model, $attribute);
        $url = empty($url) ? Yii::app()->controller->createUrl("/site/uploadTemp", array("index" => $index)) : $url;
        Yii::app()->getClientScript()->registerScript(__CLASS__ . '#' . $attribute, "
                            thepuzzleadmin.kendoUpload('" . get_class($uploadTemp) . "_" . $index . "_upload_temp_image" . "','" . $url . "');
		", CClientScript::POS_READY);

        return $field;
    }

}

?>
