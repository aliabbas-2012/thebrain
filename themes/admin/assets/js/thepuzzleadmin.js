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
}