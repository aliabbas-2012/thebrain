<!-- Main jumbotron for a primary marketing message or call to action -->
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
<div class="clear"></div>
<div class="tabs-container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#random_offers" data-toggle="tab">Random Offers</a></li>
        <li><a href="#recent_offers" data-toggle="tab">Recent Offers</a></li>
        <li><a href="#saved_offers" data-toggle="tab">Saved Offers</a></li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="random_offers">
            <?php
            $criteria = new CDbCriteria();
            $criteria->order = "rand()";
            $criteria->condition = "is_public>0";
            $criteria->limit = "16";
            $items = BspItem::model()->findAll($criteria);
            $this->renderPartial("//default/_tab_items", array("items" => $items));
            ?>
        </div>
        <div class="tab-pane" id="recent_offers">
            <?php
            $criteria = new CDbCriteria();
            $criteria->limit = "16";
            $criteria->order = "id DESC";
            $items = BspItem::model()->findAll($criteria);
            $this->renderPartial("//default/_tab_items", array("items" => $items));
            ?>

        </div>
        <div class="tab-pane" id="saved_offers">
            dssdsd 
        </div>

    </div>
</div>
<?php
Yii::app()->clientScript->registerScript('logoFix', '
     $(document).ready(function() {
       
        
         jQuery(".col-xs-6").hover(
          function() {
               jQuery(this).children().eq(1).children().eq(0).show();
          }, function() {
               jQuery(this).children().eq(1).children().eq(0).hide();
          }
        );
    })

', CClientScript::POS_END);
?>