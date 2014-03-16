<?php

$comments = BspComment::model()->findAll("item_id =" . $model->id);
foreach ($comments as $comment) {
    $total_rating = 5;
    echo "<div class='col-lg-12'>";
        echo "<div class='col-lg-9'>";
            echo $comment->comment;
        echo "</div>";
        echo "<div class='col-lg-3'>";
        for ($i = 1; $i <= $total_rating - $comment->rating; $i++) {
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/star2.jpg", '', array(
                "id" => "star" . $i, "class" => "starclick"
            ));
        }
        for ($i = 1; $i <= $comment->rating; $i++) {
            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/images.jpg", '', array(
                "id" => "star" . $i, "class" => "starclick"
            ));
        }
        echo "</div>";
    echo "</div>";
}
?>