<li>
    <div class="notication_message">
        <div class="col-lg-12">
            <?php
                echo CHtml::link($model->message,$this->createUrl("/web/offers/notificationdetail",array("id"=>$model->Id)));
            ?>
        </div>

    </div>

</li>