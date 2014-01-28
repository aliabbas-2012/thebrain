<?php

class zHtml extends CHtml {

    public static function enumDropDownList($model, $attribute, $htmlOptions = array()) {
        return CHtml::activeDropDownList($model, $attribute, self::enumItem($model, $attribute), $htmlOptions);
    }
    /**
     * 
     * @param type $model
     * @param type $attribute
     * @param type $data
     * @param string $htmlOptions
     * @return type
     */
    public static function activeDropDownList($model, $attribute, $data, $htmlOptions = array()) {
        self::resolveNameID($model, $attribute, $htmlOptions);
        
        $selection = self::resolveValue($model, $attribute);
        $options = "\n" . self::listOptions($selection, $data, $htmlOptions);
        self::clientChange('change', $htmlOptions);
        if ($model->hasErrors($attribute))
            self::addErrorCss($htmlOptions);
        $hidden = '';
        if (!empty($htmlOptions['multiple'])) {
            if (substr($htmlOptions['name'], -2) !== '[]')
                $htmlOptions['name'].='[]';
            if (isset($htmlOptions['unselectValue'])) {
                $hiddenOptions = isset($htmlOptions['id']) ? array('id' => self::ID_PREFIX . $htmlOptions['id']) : array('id' => false);
                $hidden = self::hiddenField(substr($htmlOptions['name'], 0, -2), $htmlOptions['unselectValue'], $hiddenOptions);
                unset($htmlOptions['unselectValue']);
            }
        }
        return $hidden . self::tag('select', $htmlOptions, $options);
    }
    /**
     * 
     * @param type $selection
     * @param type $listData
     * @param type $htmlOptions
     * @return string
     */
    public static function listOptions($selection, $listData, &$htmlOptions) {
        $raw = isset($htmlOptions['encode']) ;
        
        $content = '';
        if (isset($htmlOptions['prompt'])) {
            $content.='<option value="">' . strtr($htmlOptions['prompt'], array('<' => '&lt;', '>' => '&gt;')) . "</option>\n";
            unset($htmlOptions['prompt']);
        }
        if (isset($htmlOptions['empty'])) {
            if (!is_array($htmlOptions['empty']))
                $htmlOptions['empty'] = array('' => $htmlOptions['empty']);
            foreach ($htmlOptions['empty'] as $value => $label)
                $content.='<option value="' . self::encode($value) . '">' . strtr($label, array('<' => '&lt;', '>' => '&gt;')) . "</option>\n";
            unset($htmlOptions['empty']);
        }
        if (isset($htmlOptions['options'])) {
            $options = $htmlOptions['options'];
            unset($htmlOptions['options']);
        }
        else
            $options = array();
        $key = isset($htmlOptions['key']) ? $htmlOptions['key'] : 'primaryKey';
        if (is_array($selection)) {
            foreach ($selection as $i => $item) {
                if (is_object($item))
                    $selection[$i] = $item->$key;
            }
        }
        elseif (is_object($selection))
            $selection = $selection->$key;
        foreach ($listData as $key => $value) {
            if (is_array($value)) {
                $content.='<optgroup label="' . ($raw ? $key : self::encode($key)) . "\">\n";
                $dummy = array('options' => $options);
                if (isset($htmlOptions['encode']))
                    $dummy['encode'] = $htmlOptions['encode'];
                $content.=self::listOptions($selection, $value, $dummy);
                $content.='</optgroup>' . "\n";
            }
            else {
                $attributes = array('value' => (string) $key, 'encode' => !$raw);
                if (!is_array($selection) && !strcmp($key, $selection) || is_array($selection) && in_array($key, $selection))
                    $attributes['selected'] = 'selected';
                if (isset($options[$key]))
                    $attributes = array_merge($attributes, $options[$key]);
                $content.=self::tag('option', $attributes, $raw ? (string) $value : self::encode((string) $value)) . "\n";
            }
        }
        unset($htmlOptions['key']);
        return $content;
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
     * 
     * @param type $data
     * @return type
     */
    public static function decodeArray($data) {
        $d = array();
        foreach ($data as $key => $value) {
            if (is_string($key))
                $key = htmlspecialchars_decode($key, ENT_QUOTES);
            if (is_string($value))
                $value = htmlspecialchars_decode($value, ENT_QUOTES);
            else if (is_array($value))
                $value = self::decodeArray($value);
            $d[$key] = $value;
        }
        return $d;
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
     * where one models has double image fields
     * @param type $model
     * @param type $attribute
     * @param type $folder
     */
    public static function imageDoubleLink($model, $attribute, $folder, $folder2) {
        if (!$model->isNewRecord && !empty($model->$attribute)) {
            $path = Yii::app()->baseUrl . "/uploads/" . $folder . "/" . $model->primaryKey . "/" . $folder2 . "/" . $model->$attribute;

            return CHtml::link($model->$attribute, $path, array("target" => "_blank"));
        }
    }

    /**
     * static link
     * of image
     * @param type $model
     * @param type $attribute
     */
    public static function imageLinkRemove($model, $attribute, $folder, $attribute_folder = "") {
        if (!$model->isNewRecord && !empty($model->$attribute)) {
            $path = Yii::app()->baseUrl . "/uploads/" . $folder . "/" . $model->primaryKey;
            if (!empty($attribute_folder)) {
                $path.="/" . $attribute_folder;
            }
            $path.="/" . $model->$attribute;
            $link = CHtml::link($model->$attribute, $path, array("target" => "_blank", "id" => $attribute . "_image", "style" => "margin-left:150px;"));
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
                        "style" => "margin-left:10px;"
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
