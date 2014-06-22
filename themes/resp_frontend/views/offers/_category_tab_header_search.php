<div class="tab-header">
    <?php
    $data = BspCategory::model()->findAll(array('condition' => 'parent_id=0'));
    //for language translation
    $cat_var = Yii::app()->language == "en" ? "name" : "name_de";
    foreach ($data as $cat):
        echo CHtml::link($cat->$cat_var, $this->createUrl("/web/offers/category", array("category" => $cat->slug)),array("category_id"=>$cat->id));
    endforeach;
    ?>
    <div class="total">
        <?php
            if(isset($total)){
                echo "<span>".$total. "</span> ".Yii::t("global","Results");
                        
            }
        ?>
    </div>
</div>