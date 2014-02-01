<div id="loadimgvideo" class="floatLeft" style="width:100%; height: 320px; overflow-x: scroll;">
</div>

<script>
    function doOfferCheckBox(obj){
        if (jQuery(obj).is(':checked')) {
                jQuery("#loadimgvideo>div input[type='checkbox']").prop("checked", false);
                jQuery(obj).prop("checked", true);
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

                index = 0;

                if (jQuery("#loadimgvideo>div").length > 0) {
                    index = jQuery("#loadimgvideo>div").length;
                }

                html = "<div class='col-lg-4'>";
                html += "<input type='hidden' name='BspItemImage_" + index + "_image_url' value='" + e.response.file + "' >";
                html += "<img style='width:100%' src='" + path + "' >";
                html += "<input type='checkbox' onclick='doOfferCheckBox(this)' name='BspItemImage_" + index + "_is_offer' value= '' >";
                html += "</div>";
                jQuery("#loadimgvideo").append(html);
                //jQuery(".over-post-avata").attr("src", path);

            },
            upload: function(e) {

            },
        });
    })

</script>    