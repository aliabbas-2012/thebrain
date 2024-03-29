var thepuzzleadmin = {
    items_json: '',
    filldropDownField: function(obj, url, elem_id) {
        if ($(obj).val() != "") {
            $("#loading").show();
            if(url.indexOf("?")==-1){
                url += "?id=" + $(obj).val();
            }
            else {
                  url += "&id=" + $(obj).val();
            }
            $.getJSON(url, function(data) {

                var items = [];
                counter = 0;
                items.push('<option value="">Select</option>');
                $.each(data, function(key, val) {
                    items.push('<option value="' + key + '">' + val + '</option>');

                    counter++;
                });
                $("#loading").hide();

                $("#" + elem_id).html(items.join(''));
            });
        }

    },
    /**
     * to update element on ajax all
     * @param {type} ajax_url
     * @param {type} update_element_id
     * @param {type} resource_elem_id
     * @param {type} update_element_id
     * @returns {undefined}
     */
    removeElementAjax: function(ajax_url, elems, update_element_id) {
        if (confirm("Are you sure you want to delete")) {
            jQuery.ajax({
                type: "POST",
                url: ajax_url,
                async: false,
                data:
                        {
                        }
            }).done(function(response) {
                count = 0;
                for (e in elems) {
                    if (count < elems.length) {
                        jQuery("#" + elems[e]).remove();

                    }
                    count++;
                }
            });
            jQuery("#" + update_element_id).val("");
        }

        return true;

    },
    checkUncheckBoxAll: function (obj){
        $(".child_checkbox input:checkbox").prop('checked', $(obj).prop("checked"));
    },
    /**
     * to update element on ajax all
     * @param {type} ajax_url
     * @param {type} update_element_id
     * @param {type} resource_elem_id
     * @returns {undefined}
     */
    updateElementAjax: function(ajax_url, update_element_id, resource_elem_id) {

        if (jQuery("#" + resource_elem_id).val() != "") {
            jQuery.ajax({
                type: "POST",
                url: ajax_url,
                async: false,
                data:
                        {
                            resource_elem_id: jQuery("#" + resource_elem_id).val(),
                        }
            }).done(function(response) {
                jQuery("#" + update_element_id).html(response);
            });
        }
    },
    kendoUpload: function(elem_id, url) {

        $("#" + elem_id).kendoUpload({
            async: {
                saveUrl: url,
                removeUrl: url + "&action=remove",
                autoUpload: true
            },
            localization: {
                "select": "Browse"
            },
            cancel: this.onCancel,
            complete: this.onComplete,
            error: this.onError,
            progress: this.onProgress,
            remove: this.onRemove,
            select: this.onSelect,
            success: this.onSuccess,
            upload: this.onUpload
        });
    },
    /**
     *  kendo information
     * @param {type} e
     * @returns {undefined}
     */
    onSelect: function(e) {
        jQuery("#loading").show();
    },
    onUpload: function(e) {

    },
    onSuccess: function(e) {

        jQuery("#" + e.response.attribute).val(e.response.file);
        jQuery("#loading").hide();
    },
    onError: function(e) {

    },
    onComplete: function(e) {

    },
    onCancel: function(e) {

    },
    onRemove: function(e) {

    },
    onProgress: function(e) {

    },
    getFileInfo: function(e) {
        return $.map(e.files, function(file) {
            var info = file.name;

            // File size is not available in all browsers
            if (file.size > 0) {
                info += " (" + Math.ceil(file.size / 1024) + " KB)";
            }
            return info;
        }).join(", ");
    },
    /**
     * Show time end 
     * @param {type} e
     * @returns {undefined}
     */
    showTimeEnd: function(obj) {

        if (jQuery(obj).val() == "abs") {
            jQuery(obj).parent().next().next().children().hide();
        }
        else if (jQuery(obj).val() == "range") {
            jQuery(obj).parent().next().next().children().show();
        }  },
    GetGeo: function(val) {
        var address = val;
        if (address != null) {
            var geocoder;
            var addlocation;
            geocoder = new google.maps.Geocoder();
            if (geocoder) {
                geocoder.geocode({'address': address}, function(results, status) {
                    //alert(status)
                    if (status == google.maps.GeocoderStatus.OK) {
                        addlocation = results[0].geometry.location;
                        var lat = addlocation.lat();
                        var lng = addlocation.lng();
                        console.log(results);
                     
                        //alert($('#lat').val() +' ' + $('#lng').val())
                       
                    }
                    else {
//                                    alert("Geocode was not successful for the following reason: " + status);
                    }
                });
            }
        } else {
           
        }
    }


}
