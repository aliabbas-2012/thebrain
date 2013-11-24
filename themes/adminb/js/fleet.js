/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var fleet_js = {
    items_json: '',
    filldropDropDown: function(obj, url, elem_id) {
        if ($(obj).val() != "") {
            $("#loading").show();
            url += "?id=" + $(obj).val();
            $.getJSON(url, function(data) {

                var items = [];
                counter = 0;
                fleet_js.items_json = data;
                $.each(data, function(key, val) {
                    items.push('<option value="' + key + '">' + val['serial'] + '</option>');
                    if (counter == 0) {
                        $("#MaintenanceActivity_vechicle_odometer").val(val['odometer']);
                    }
                    counter++;
                });
                $("#loading").hide();
                $("#" + elem_id).html(items.join(''));
            });
        }

    },
    filldropDownField: function(obj, url, elem_id) {
        if ($(obj).val() != "") {
            $("#loading").show();
            url += "?id=" + $(obj).val();
            $.getJSON(url, function(data) {

                var items = [];
                counter = 0;
                
                $.each(data, function(key, val) {
                    items.push('<option value="' + key + '">' + val + '</option>');
                    
                    counter++;
                });
                $("#loading").hide();
                $("#" + elem_id).html(items.join(''));
            });
        }

    },
    setOdemeter: function(obj) {
        vechile = $(obj).val();
        if (typeof(fleet_js.items_json[vechile]) != "undefined") {
             $("#MaintenanceActivity_vechicle_odometer").val(fleet_js.items_json[vechile]['odometer']);
        }
    }
}  