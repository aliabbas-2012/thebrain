var thepuzzleadmin = {
    items_json: '',
    filldropDownField: function(obj, url, elem_id) {
        if ($(obj).val() != "") {
            $("#loading").show();
            url += "?id=" + $(obj).val();
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
    kendoUpload: function(elem_id,url) {
        $("#"+elem_id).kendoUpload({
            async: {
                saveUrl: url,
                removeUrl: url+"&action=remove",
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
        console.log(e);
    },
    onUpload: function(e) {
        
    },
    onSuccess: function(e) {
       console.log(e.response);
       jQuery("#"+e.response.attribute).val(e.response.file);
    },
    onError: function(e) {
      
    },
    onComplete: function(e) {
     
    },
    onCancel: function(e) {
       
    },
    onRemove: function(e) {
       console.log(e);
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
    }

}
