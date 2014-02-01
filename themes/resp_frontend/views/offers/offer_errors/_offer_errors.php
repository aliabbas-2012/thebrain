<div class="col-lg-12 post_error_list">
    <?php
    CVarDumper::dump($model->errors,10,true);
    if ($model->hasErrors() || $user->hasErrors()) {
        echo "<ul>";
        foreach ($model->errors as $key => $error) {
            if ($model->hasRelated($key)) {
                if (!empty($model->$key)) {
                    foreach ($model->$key as $relation) {

                        if ($relation->hasErrors()) {
                            foreach ($relation->errors as $error) {
                                echo "<li>";
                                echo $error[0];
                                echo "</li>";
                            }
                        }
                    }
                }
            } else {
                echo "<li>";
                echo $error[0];
                echo "</li>";
            }
        }
        
        foreach ($user->errors as $key => $error) {
            echo "<li>";
            echo $error[0];
            echo "</li>";
        }
        echo "</ul>";
    }
    //CVarDumper::dump($model->errors, 10, true);
    ?>
    <?php //echo CHtml::errorSummary(array($model, $user)); ?>
</div>