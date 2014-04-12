var thepuzzleadmin = {
    items_json: '',
    filldropDownField: function(obj, url, elem_id) {
        if (jQuery(obj).val() != "") {
            jQuery("#loading").show();
            op = "?";
            if (url.search("\\?") != -1) {
                op = "&";
            }
            url += op + "id=" + jQuery(obj).val();
            jQuery.getJSON(url, function(data) {

                var items = [];
                counter = 0;
                items.push('<option value="">Select</option>');
                jQuery.each(data, function(key, val) {
                    items.push('<option value="' + key + '">' + val + '</option>');

                    counter++;
                });
                jQuery("#loading").hide();

                jQuery("#" + elem_id).html(items.join(''));
            });
        }

    },
    fillKendoDropDown: function(obj, url, elem_id, a) {
        if (jQuery(obj).val() != "") {
            jQuery("#loading").show();
            op = "?";
            if (url.search("\\?") != -1) {
                op = "&";
            }
            url += op + "id=" + jQuery(obj).val();
            jQuery.getJSON(url, function(data) {
                savobj = jQuery("#" + elem_id);
                del_parent = savobj.parent()
                append_parent = savobj.parent().parent();
                var items = [];
                counter = 0;
                items.push('<option value="">Select</option>');
                del_parent.remove();
                jQuery.each(data, function(key, val) {
                    items.push('<option value="' + key + '">' + val + '</option>');
                    counter++;
                });

                del_parent.remove();
                if (a == false) {
                    append_parent.prepend(savobj);
                }
                else {
                    append_parent.append(savobj);
                }

                jQuery("#loading").hide();

                jQuery("#" + elem_id).html(items.join(''));
                jQuery("#" + elem_id).show();
                jQuery("#" + elem_id).kendoDropDownList();
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
    /**
     * to update element on ajax all
     * @param {type} ajax_url
     * @param {type} update_element_id
     * @param {type} resource_elem_id
     * @returns {undefined}
     */
    updateElementAjax: function(ajax_url, update_element_id, resource_elem_id) {
        jQuery("#loading").show();
        jQuery.ajax({
            type: "POST",
            url: ajax_url,
            async: false,
            data:
                    {
                        resource_elem_id: resource_elem_id != "" ? jQuery("#" + resource_elem_id).val() : "",
                        "ajax": "1",
                    }
        }).done(function(response) {
            if (update_element_id != "") {
                jQuery("#" + update_element_id).html(response);
            }
            jQuery("#loading").hide();
        });

    },
    loadNextPage: function(parent) {
        if (jQuery("#" + parent + " .yiiPager li.page.selected").next().hasClass("page") == true) {
            current = jQuery("#" + parent + " .yiiPager li.page.selected")
            current.next().children().eq(0).trigger("click");
            current.removeClass("selected");
            current.next().addClass("selected");

            if (jQuery("#" + parent + " .yiiPager li.page.selected").next().hasClass("page") == false) {
                jQuery("#" + parent + " .load_more").remove();
            }
        }
    },
    /**
     * to update element on ajax all
     * @param {type} ajax_url
     * @param {type} update_element_id
     * @param {type} resource_elem_id
     * @returns {undefined}
     */
    appendElementAjax: function(ajax_url, update_element_id, criteria, obj) {
        jQuery("#loading").show();
        ajax_url = ajax_url + "?BspItem_page=" + jQuery(obj).html();
        console.log(ajax_url);
        jQuery.ajax({
            type: "POST",
            url: ajax_url,
            async: false,
            data:
                    {
                        criteria: criteria,
                        "ajax": "1",
                        "update_element_id": update_element_id
                    }
        }).done(function(response) {
            if (update_element_id != "") {
                jQuery("#" + update_element_id).append(response);
            }
            jQuery("#loading").hide();
        });

    },
    /**
     * update through post and parameers
     * @param {type} ajax_url
     * @param {type} update_element_id
     * @param {type} resource_elem_id
     * @returns {undefined}
     */
    updateElementAjaxParameter: function(ajax_url, update_element_obj, req_params) {
        jQuery("#loading").show();
        jQuery.ajax({
            type: "POST",
            url: ajax_url,
            async: false,
            data: req_params,
        }).done(function(response) {

            jQuery(update_element_obj).append(response);

            jQuery("#loading").hide();
        });

    },
    kendoUpload: function(elem_id, url) {

        jQuery("#" + elem_id).kendoUpload({
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
        return jQuery.map(e.files, function(file) {
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
        }
    },
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
                    }
                    else {
//                                    alert("Geocode was not successful for the following reason: " + status);
                    }
                });
            }
        } else {

        }
    },
    showAlertBox: function(msg, type) {
        jQuery(".alert-" + type).html(msg);
        jQuery(".alert-" + type).show();

        jQuery(window).scrollTop(".alert-" + type);
        setTimeout(function() {
            jQuery(".alert-" + type).html("");
            jQuery(".alert-" + type).fadeOut();
        }, 1000);

    },
    submitSearch: function() {
        jQuery('#search-form').submit();
    },
    postOffer: function() {
        if (!$("#public_offer").is(':checked')) {

            $.alert.open({
                type: 'error',
                content: 'Please accept T&Cs'
            });
        } else {
            jQuery('#post-form').submit();
        }

    },
    buyOffer: function(ajax_url) {

        jQuery("#loading").show();

        jQuery.ajax({
            type: "POST",
            url: ajax_url,
            async: false,
            dataType: 'json',
            data:
                    {
                        "ajax": "1",
                    }
        }).done(function(response) {
            
            if (response['ack'] == "Warning") {
                $.alert.open({
                    type: 'warning',
                    content: response['warning']
                });
            }
            else if(response['ack'] == "Success"){
                $.alert.open({
                    type: 'success',
                    content: response['success']
                });
            }
            jQuery("#loading").hide();
        }).fail(function(jqXHR, textStatus) {
            jQuery("#loading").hide();
        })
    }


}
