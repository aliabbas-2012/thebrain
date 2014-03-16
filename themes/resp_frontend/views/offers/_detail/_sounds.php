<div class="space-blog"></div>
<div id='soundcloud'>
    <?php
    echo Yii::t('detailOffer', 'Sounds List');
    
    ?>

</div>
<?php
foreach ($model->item_related_sounds as $sound):
    echo '<div class="col-lg-12" >' . $sound->url . '</div>';
endforeach;
?>