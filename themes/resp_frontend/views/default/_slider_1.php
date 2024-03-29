<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">

            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/1.jpg'));
            ?>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">

            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/1.jpg'));
            ?>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">

            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/2.jpg'));
            ?>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">

            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/3.jpg'));
            ?>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">

            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/4.jpg'));
            ?>
            <div class="carousel-caption">
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>