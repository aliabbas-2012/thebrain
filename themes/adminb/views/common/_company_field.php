<?php ?>
<div class="row">
    <?php echo $form->labelEx($model, 'company_id'); ?>
    <?php
    if (Yii::app()->user->type == "admin") {
        //user send from prvious view
        $htmOptions = array();
        if(isset($htmlOptions)){
            $htmOptions = $htmlOptions;
        }
        echo $form->dropDownList($model, 'company_id', array("" => "Select ") + $this->list_companies,$htmOptions);
    } else {
        echo $form->hiddenField($model, 'company_id', array("value" => Yii::app()->user->user->company_id));
       
        echo CHtml::label($this->list_companies[Yii::app()->user->user->company_id], $this->list_companies[Yii::app()->user->user->company_id],array("style"=>"font-weight:bold"));
    }
    ?>
    <?php echo $form->error($model, 'company_id'); ?>
</div>

<?php ?>
