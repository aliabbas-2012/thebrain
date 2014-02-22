<link href="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/css/bs-template-product.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/css/bootslider.css" rel="stylesheet" type="text/css" />
<script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/js/touchSwipe.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/js/mousewheel.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/js/fitvids.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/js/bootslider.js" type="text/javascript"></script>

<div class="bootslider" id="bootslider">
    <!-- Bootslider Loader -->
    <div class="bs-loader">
        <img src="<?php echo Yii::app()->theme->baseUrl ?>/dist/slider/img/loader.gif" width="31" height="31" alt="Loading.." id="loader" />
    </div>
    <!-- /Bootslider Loader -->

    <!-- Bootslider Container -->
    <div class="bs-container">

        <!-- Bootslider Slide -->
        <div class="bs-slide active" data-animate-in="fadeInLeft" data-animate-out=" fadeOutRight ">
            <div class="bs-foreground">
                <div class="text-center text-white" data-animate-in="fadeInDown" data-delay="400">
                    
                    
                </div>
                <div class="text-center">
                    <div class="text-center" style="position:absolute; width:43.75%; margin-left:28.125%;">
                        <a href="javascript:void(0)">
                            
                        </a>
                        
                    </div>
                </div>
                <div class="text-center logo hidden-xs" data-animate-in="fadeInUp">
                    <i class="fa fa-3x fa-twitter text-wet-ashpalt"></i>
                </div>
            </div>
            <div class="bs-background">
                <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/1.jpg'));
                ?>

            </div>
        </div>
        <!-- /Bootslider Slide -->

        <!-- Bootslider Slide -->
        <div class="bs-slide" data-animate-in="fadeInLeft" data-animate-out="fadeOutRight">
            <div class="bs-foreground">
                <div class="text-center text-white" data-animate-in="fadeInDown" data-delay="400">
                    <h1>Bootslider</h1>
                    <p class="hidden-xs">
                        Simply loves Bootstrap
                    </p>
                </div>
                <div class="text-center">
                    <div style="position:absolute; width:58.75%; margin-left:20.625%;">
                        
                    </div>
                </div>
                <div class="text-center logo hidden-xs" data-animate-in="fadeInUp">
                    <i class="fa fa-3x fa-twitter text-white"></i>
                </div>
            </div>
            <div class="bs-background">
                <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/2.jpg'));
                ?>
            </div>
        </div>
        <!-- /Bootslider Slide -->

        <!-- Bootslider Slide -->
        <div class="bs-slide" data-animate-in="fadeInLeft" data-animate-out="fadeOutRight">
            <div class="bs-foreground">
                <div class="text-center text-white" data-animate-in="fadeInDown" data-delay="400">
                    <h1>Bootslider</h1>
                    <p class="hidden-xs">
                        Simply loves Bootstrap
                    </p>
                </div>
                <div class="text-center">
                    <div class="text-center" style="position:absolute; width:36.14%; margin-left:31.92%;">
                        
                    </div>
                </div>
                <div class="text-center logo hidden-xs" data-animate-in="fadeInUp">
                    <i class="fa fa-3x fa-twitter text-white"></i>
                </div>
            </div>
            <div class="bs-background">
                <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/3.jpg'));
                ?>
            </div>
        </div>
        <!-- /Bootslider Slide -->

        <!-- Bootslider Slide -->
        <div class="bs-slide" data-animate-in="fadeInLeft" data-animate-out="fadeOutRight">
            <div class="bs-foreground">
                <div class="bs-video-fullscreen" data-animate-in="fadeIn" data-delay="800" data-animate-out="fadeOut">
                    
                </div>
            </div>
            <div class="bs-background">
               <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/" . Yii::t('images', 'images/banners/en/4.jpg'));
                ?>
            </div>
        </div>
        <!-- /Bootslider Slide -->

    </div>
    <!-- /Bootslider Container -->

    <!-- Bootslider Progress -->
    <div class="bs-progress progress">
        <div class="progress-bar wet-ashpalt"></div>
    </div>
    <!-- /Bootslider Progress -->

    <!-- Bootslider Thumbnails -->
    <div class="bs-thumbnails text-center text-wet-ashpalt">
        <ul class=""></ul>
    </div>
    <!-- /Bootslider Thumbnails -->

    <!-- Bootslider Pagination -->
    <div class="bs-pagination text-center text-wet-ashpalt">
        <ul class="list-inline"></ul>
    </div>
    <!-- /Bootslider Pagination -->

    <!-- Bootslider Controls -->
    <div class="text-center">
        <div class="bs-controls">
            <a href="javascript:void(0);" class="bs-prev wet-ashpalt">&lt;</a>
            <a href="javascript:void(0);" class="bs-next wet-ashpalt">&gt;</a>
        </div>
    </div>
    <!-- /Bootslider Controls -->

</div>

<script>
    $(document).ready(function() {
        var slider = new bootslider('#bootslider', {
            animationIn: "fadeInUp",
            animationOut: "flipOutX",
            timeout: 5000,
            autoplay: true,
            preload: true,
            pauseOnHover: false,
            thumbnails: false,
            pagination: true,
            mousewheel: false,
            keyboard: true,
            touchscreen: true
        });
        slider.init();
    });
</script>