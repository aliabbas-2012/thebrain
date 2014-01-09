
<div class="col-lg-10 reviewcomment">
    <div class="row ">
        <div class="review">
            <div class="col-md-2 col-md-1_5 review-img-content">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/images/avata-item1.png"); ?>
            </div>
            <div class="col-xs-10 review-content">
                <div class="col-md-5">
                    <div class="title" >
                        <?php echo Yii::t('user', 'Review for') ?>
                        <?php
                        if ($user && !empty($data->user)):
                            ?>
                            <span><?php echo $data->user->first_name . " " . $data->user->second_name; ?></span> 
                            <?php
                        endif;
                        ?>
                        <span><?php echo isset($data->order) ? $data->order->description : ""; ?></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="ratingcomment"><strong><?php echo Yii::t('user', 'Ratings') ?></strong>
                        <?php
                        $stringstar = "";
                        $numberStar = $data->rating;
                        $src = Yii::app()->theme->baseUrl;
                        for ($i = $numberStar + 1; $i <= 5; $i++) {
                            $stringstar .= '<img    src="' . $src . '/images/star2.jpg"  />';
                        }
                        for ($i = 1; $i <= $numberStar; $i++) {
                            $stringstar .= '<img   src="' . $src . '/images/images.jpg" />';
                        }

                        echo $stringstar;
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="date"><?php echo date("d-m-Y", strtotime($data->date_comment)); ?></div>
                </div>
                <div class="clear"></div>
                <div class="col-md-10">
                    <div class="contant">
                        <?php echo $data->comment; ?>
                    </div>
                </div>

            </div>
            <div class="clear"></div>

        </div>

    </div>
</div>
