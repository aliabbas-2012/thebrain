<div id="loadimgvideo" class="floatLeft">
    <?php
    $this->renderPartial("//offers/offer_images/_offer_images", array("model" => $model));
    echo CHtml::hiddenField("curren_index_img", count($model->image_items));
    ?>

</div>

<script>
    function doOfferCheckBox(obj) {
        if (jQuery(obj).is(':checked')) {
            jQuery("#loadimgvideo>div input[type='checkbox']").each(function() {
                if (jQuery(obj).attr("name") != jQuery(this).attr("name")) {
                    jQuery(this).prop("checked", false);
                    jQuery(this).prev().val(0);
                }
                else {
                    jQuery(obj).prev().val(1);
                }
            })
        }
    }
    jQuery(function() {

        jQuery("#upload-image-trigger").click(function() {
            jQuery("#UploadTemp_3_upload_temp_image").trigger("click");
        })
        jQuery("#UploadTemp_3_upload_temp_image").kendoUpload({
            async: {
                saveUrl: upload_images_url,
                autoUpload: true
            },
            localization: {
                "select": "Upload Your Images"
            },
            cancel: function(e) {

            },
            complete: function(e) {

            },
            error: function(e) {

            },
            progress: function(e) {

            },
            remove: function(e) {

            },
            select: function(e) {
                jQuery("#loading").show();

            },
            success: function(e) {

                path = "<?php echo Yii::app()->baseUrl . "/uploads/temp/" . Yii::app()->user->id . "/BspItemFrontEnd/BspItemFrontEnd_upload_images/" ?>" + e.response.file;
                jQuery("#loading").hide();

                index = parseInt(jQuery("#curren_index_img").val());

                if (jQuery("#loadimgvideo>div").length == 0) {
                    index = 0;
                }

                jQuery("#curren_index_img").val(index + 1);

                html = "<div class='col-lg-4'>";
                html += "<input type='hidden' name='BspItemImage[" + index + "][image_url]' value='" + e.response.file + "' >";
                html += "<img style='width:100%' src='" + path + "' >";
                html += '<input id="ytBspItemImage_' + index + '_is_offer" type="hidden" name="BspItemImage[' + index + '][is_offer]" value="0">';
                html += "<input type='checkbox' onclick='doOfferCheckBox(this)' name='BspItemImage=[" + index + "][is_offer]' >";
                html += "</div>";
                jQuery("#loadimgvideo").append(html);
                //jQuery(".over-post-avata").attr("src", path);

            },
            upload: function(e) {

            },
        });
    })

</script>    