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

}

?>
