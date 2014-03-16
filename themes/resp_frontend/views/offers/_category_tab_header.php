<div class="tab-header">
    <?php
    $data = BspCategory::model()->findAll(array('condition' => 'parent_id=0'));
    $category = BspCategory::model()->getParentCategory($cat_arr[1]);
    foreach ($data as $cat):
        if (isset($cat_arr[1]) && ($cat->primaryKey == $cat_arr[1])) {
            echo CHtml::link($cat->name, $this->createUrl("/web/offers/category", array("category" => $cat->slug)), array("class" => "active"));
        }
        else if($category->parent_id == $cat->primaryKey){
            echo CHtml::link($cat->name, $this->createUrl("/web/offers/category", array("category" => $cat->slug)), array("class" => "active"));
        }
        else {
            echo CHtml::link($cat->name, $this->createUrl("/web/offers/category", array("category" => $cat->slug)));
        }

    endforeach;
    ?>
</div>