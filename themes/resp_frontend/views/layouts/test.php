<div class="navbar navbar-inverse first-nav" role="navigation">
    <div class="container container-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo $this->createUrl(Yii::app()->homeUrl[0]); ?>">
                <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/logo.png", '', array("width" => "200"));
                ?>
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <?php
            $criteria = new CDbCriteria();
            $criteria->select = "ID,article_name,article_name_de,custom_url_de,custom_url";
            $articless = BspArticla::model()->findAll($criteria);
            ?>
            <ul class="nav navbar-nav navbar-right"> 
                <?php
                if (isset(Yii::app()->user->id)):
                    ?>
                    <li class="dropdown">
                        <a  class="dropdown-toggle" data-toggle="dropdown">
                            <?php
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/notify.png", '', array("height" => "20"));
                            ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php
                                echo CHtml::link(Yii::t('link', "Dashboard"), $this->createUrl('/web/user/dashboard'));
                                ?>
                            </li>                                
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a  class="dropdown-toggle" data-toggle="dropdown">
                            <?php
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/mail.png", '', array("height" => "20"));
                            ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php
                                echo CHtml::link(Yii::t('link', "View All Messages"), $this->createUrl('/web/user/messages'));
                                ?>
                            </li>                                
                        </ul>
                    </li>
                    <?php
                endif;
                ?>
                <li class="dropdown">
                    <?php
                    /**
                     * login
                     */
                    if (empty(Yii::app()->user->id)):
                        ?>
                        <a  class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                        <div class="dropdown-menu login-dropdown-menu">
                            <?php
                            $model = new LoginForm;
                            $this->renderPartial("//common/_login_box", array("model" => $model));
                            ?>
                        </div>
                        <?php
                    else :
                        $this->renderPartial("//common/_logout_box");
                    endif;
                    ?>
                </li>

                <li>
                    <?php
                    echo CHtml::link(Yii::t('link', "Home"), $this->createUrl("/web/default/index"));
                    ?>
                </li>
                <li>
                    <?php
                    echo CHtml::link(Yii::t('link', "Blog"), $this->createUrl("/web/blog/index"));
                    ?>                        
                </li>
                <li>
                    <?php
                    echo CHtml::link(Yii::t('link', "How It Works"), $this->createUrl("/web/article/index", array("slug" => !empty($articless[0]) ? $articless[0]->slug : "how-it-works-8")));
                    ?>                        
                </li>
                <li >
                    <?php
                    echo CHtml::link(Yii::t('link', "Post Offer"), $this->createUrl("/web/offers/post", array("action" => "create")), array("class" => "offer"));
                    ?>                        
                </li>


            </ul>
        </div><!--/.nav-collapse -->
    </div>
    <div class="container search-bar" >

        <div class="navbar-collapse form-nav">
            <?php
            $model = new OfferSearch();
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'search-form',
                'enableAjaxValidation' => false,
                'action' => $this->createUrl("/web/offers/search"),
                'htmlOptions' => array(
                    'class' => 'form-horizontal',
                )
            ));
            ?>
            <ul class="nav navbar-nav"> 
                <li class="dropdown">
                    <a  class="dropdown-toggle head_category" data-toggle="dropdown">
                        <?php echo Yii::t('link', 'All Categories') ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu category_head_menu">
                        <?php
                        $data = BspCategory::model()->findAll(array('condition' => 'parent_id=0'));
                        $i = 1;
                        foreach ($data as $da) {

                            $cssClass = "";
                            if ($da->name != "Services" && $da->name != "Rentals") {
                                $cssClass = "clearleft";
                            }
                            echo '<li id="menu-item-' . $i . '" class=' . $cssClass . '>';

                            echo CHtml::link($da->name, $this->createUrl("/web/offers/category", array("category" => $da->slug)));


                            echo CHtml::openTag("ul", array("class" => ""));
                            $subcate = BspCategory::model()->findAll(array('condition' => 'parent_id=' . $da->id));
                            foreach ($subcate as $sub) {

                                echo '<li>';
                                echo CHtml::link($sub->name, $this->createUrl("/web/offers/category", array("category" => $sub->slug)));
                                echo '</li>';
                            }
                            echo CHtml::closeTag("ul");
                            echo '</li>';

                            $i++;
                        }
                        ?>

                    </ul>
                </li>

                <li class="keword_search">
                    <?php
                    echo $form->textField($model, 'keyword', array(
                        "class" => "form-control", "placeholder" => "Search ..."));
                    ?>
                </li>    
                <li class="location_search">
                    <?php
                    echo $form->textField($model, 'location', array("class" => "form-control", "placeholder" => "f.e 10245 Berlin..."));
                    echo $form->hiddenField($model, 'lat');
                    echo $form->hiddenField($model, 'lng');

                    //other fields as search
                    echo $form->hiddenField($model, 'special_deal');
                    echo $form->hiddenField($model, 'withVideo');
                    echo $form->hiddenField($model, 'withSound');
                    echo $form->hiddenField($model, 'lowPrice');
                    echo $form->hiddenField($model, 'highPrice');
                    echo $form->hiddenField($model, 'popularity');
                    echo $form->hiddenField($model, 'nearFirst');
                    ?>
                </li>    
                <li class="distant_search">
                    <?php
                    $distance_arr = array(
                        "0" => "+/- km",
                        "5" => "5km",
                        "10" => "10km",
                        "20" => "20km",
                        "50" => "50km",
                        "100" => "100km",
                        "250" => "250km",
                        "" => "All Over",
                    );
                    echo $form->dropDownList($model, 'distance', $distance_arr, array("class" => "form-control"));
                    ?>

                </li>
                <li class="btn-search">                            
                    <div class="search-button">
                        <a class="searchbt-top" href="javascript:void(0)" onclick="jQuery('#search-form').submit();">
                            <?php
                            echo CHtml::image(Yii::app()->theme->baseUrl . "/images/search_button.png");
                            ?>
                        </a>
                    </div>
                </li>
            </ul>
            <?php
            $this->endWidget();
            ?>
        </div><!--/.nav-collapse -->
    </div>
</div>