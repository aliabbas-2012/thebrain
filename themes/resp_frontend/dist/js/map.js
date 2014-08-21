var searchLat = 0;
var searchLong = 0;
var geoSearchMap;
var poly;
var count = 0;
var points = new Array();
var markers = new Array();
var icon_url = "http://labs.google.com/ridefinder/images/";
var tooltip;
var lineColor = "#0000af";
var fillColor = "#335599";
var lineWeight = 3;
var lineOpacity = .8;
var fillOpacity = .2;
var searchPage = 0;
var circle;
var circleUnits;
var circleRadius;
var leftHandler;


var g_map_search = {
    searchLat: 0,
    searchLong: 0,
    loadgeoSearchMap: function() {

        if (GBrowserIsCompatible())
        {
            geoSearchMap = new GMap2(document.getElementById('googleMap'));
            tooltip = document.createElement("div");
            tooltip.className = "tooltip";
            geoSearchMap.setCenter(new GLatLng(37.680886, -97.350082), 10);
            geoSearchMap.addControl(new GLargeMapControl());
            var mapControl = new GHierarchicalMapTypeControl();
            geoSearchMap.addMapType(G_PHYSICAL_MAP);
            // Set up map type menu relationships
            mapControl.clearRelationships();
            mapControl.addRelationship(G_SATELLITE_MAP, G_HYBRID_MAP, true);
            geoSearchMap.addControl(mapControl);
            geoSearchMap.enableDoubleClickZoom();
            geoSearchMap.setMapType(G_NORMAL_MAP);
        }
    },
    polyCircleRadio: function() {
        if (jQuery(elem).val() != "poly")
        {
            jQuery('#radiusToolBar').fadeIn();
            GEvent.removeListener(leftHandler);
        }
        else
        {
            leftHandler = GEvent.addListener(geoSearchMap, 'click', g_map_search.leftClick);
        }
    },
    updateOnSearch: function() {
        // g_map_search.clearMap();

        geoSearchMap.clearOverlays();

        var apiKey = "";

        var geocoder = new GClientGeocoder();

        geocoder.setBaseCountryCode(search_city);
        geocoder.getLatLng(search_city,
                function(point)
                {
                    if (!point)
                    {
                        alert('Cannot get coordinates for this address, please enter a different address');
                    }
                    else
                    {
                        var lat = lat_s;
                        var lng = lng_s;

                        searchLat = lat;
                        searchLong = lng;
                        var html = search_city + " (Latitude: " + lat + "<br/>" + "Longitude: " + lng + " )";
                        geoSearchMap.setCenter(point, 15);
                        var MarkerBounds = new GLatLngBounds();
                        var MarkerPoint = point;
                       
                        //Modified below to remove center point icon, RP, 08/16/10
                        geoSearchMap.addOverlay(g_map_search.createMarkers(MarkerPoint, html, 0, '0'));
                        MarkerBounds.extend(MarkerPoint);

                        g_map_search.doDrawCircle();

                    }
                });
    },
    doDrawCircle: function()
    {
        if (circle)
        {
            geoSearchMap.removeOverlay(circle);
        }
        var center = geoSearchMap.getCenter();
        var bounds = new GLatLngBounds();
        var circlePoints = Array();

        with (Math) {

            var metric = 'kilometers';
            if (metric == "kilometers")
            {
                radius = radius * 0.6213;
            }

            circleRadius = radius;
            var d = circleRadius / 3963.189;	// radians
            var lat1 = (PI / 180) * center.lat(); // radians
            var lng1 = (PI / 180) * center.lng(); // radians	
            for (var a = 0; a < 361; a++) {
                var tc = (PI / 180) * a;
                var y = asin(sin(lat1) * cos(d) + cos(lat1) * sin(d) * cos(tc));
                var dlng = atan2(sin(tc) * sin(d) * cos(lat1), cos(d) - sin(lat1) * sin(y));

                var x = ((lng1 - dlng + PI) % (2 * PI)) - PI; // MOD function
                var point = new GLatLng(parseFloat(y * (180 / PI)), parseFloat(x * (180 / PI)));
                circlePoints.push(point);
                bounds.extend(point);

            }
            circle = new GPolygon(circlePoints, '#000000', 2, 1);
            geoSearchMap.addOverlay(circle);
            points = circlePoints;
            geoSearchMap.setZoom(geoSearchMap.getBoundsZoomLevel(bounds));
        }
        g_map_search.relatedMarks();
    },
    leftClick: function(overlay, point)
    {
        if (point)
        {
            count++;
            /* Light blue marker icons*/

            var icon = new GIcon();
            icon.image = icon_url + 'mm_20_purple.png';
            g_map_search.addIcon(icon);
            /* Make markers draggable*/
            var marker = new GMarker(point, {icon: icon, draggable: true, bouncy: false, dragCrossMove: true});
            geoSearchMap.addOverlay(marker);
            marker.content = count;
            markers.push(marker);
            marker.tooltip = 'Point ' + count;
            GEvent.addListener(marker, 'mouseout', function()
            {
                tooltip.style.display = 'none';

            });

            /* Drag listener*/
            GEvent.addListener(marker, 'drag', function()
            {
                tooltip.style.display = 'none';
                g_map_search.drawOverlay();
            });

            /* Second click listener*/
            GEvent.addListener(marker, 'click', function()
            {
                tooltip.style.display = 'none';
                /* Find out which marker to remove*/
                for (var n = 0; n < markers.length; n++)
                {
                    if (markers[n] == marker)
                    {
                        geoSearchMap.removeOverlay(markers[n]);
                        break;

                    }
                }
                /* Shorten array of markers and adjust counter*/
                markers.splice(n, 1);
                if (markers.length == 0)
                {
                    count = 0;
                }
                else
                {
                    count = markers[markers.length - 1].content;
                    g_map_search.drawOverlay();
                }
            });
            g_map_search.drawOverlay();
        }
    },
    addIcon: function(icon)
    {
        icon.shadow = icon_url + "mm_20_shadow.png";
        icon.iconSize = new GSize(12, 20);
        icon.shadowSize = new GSize(22, 20);
        icon.iconAnchor = new GPoint(6, 20);
        icon.infoWindowAnchor = new GPoint(5, 1);

    },
    drawOverlay: function()
    {
        if (poly)
        {
            geoSearchMap.removeOverlay(poly);
        }
        points.length = 0;
        for (i = 0; i < markers.length; i++)
        {
            points.push(markers[i].getLatLng());
        }
        points.push(markers[0].getLatLng());
        poly = new GPolygon(points, lineColor, lineWeight, lineOpacity, fillColor, fillOpacity);
        var area = poly.getArea() / (1000 * 1000);
        geoSearchMap.addOverlay(poly);

    },
    clearMap: function()
    {
        geoSearchMap.clearOverlays();
        points.length = 0;
        markers.length = 0;
        count = 0;
        g_map_search.newOverlay();
    },
    newOverlay: function()
    {

        var curZoomLevel = geoSearchMap.getZoom();
        var curCoords = geoSearchMap.getCenter()
        geoSearchMap = new GMap2(document.getElementById('googleMap'));
        GEvent.addListener(geoSearchMap, 'click', g_map_search.leftClick);
        geoSearchMap.setCenter(curCoords, curZoomLevel);
        geoSearchMap.addControl(new GLargeMapControl());
        var mapControl = new GHierarchicalMapTypeControl();
        geoSearchMap.addMapType(G_PHYSICAL_MAP);
        mapControl.clearRelationships();
        mapControl.addRelationship(G_SATELLITE_MAP, G_HYBRID_MAP, 'Labels', true);
        geoSearchMap.addControl(mapControl);
        geoSearchMap.addControl(new GOverviewMapControl());
        geoSearchMap.enableDoubleClickZoom();
        geoSearchMap.setMapType(G_NORMAL_MAP);
        //geoSearchMap.enableScrollWheelZoom();

    },
    createMarkers: function(point, html, mycount, mymember)
    {
        var icon = new GIcon();
        if (mycount == 0)
        {
            // centre point
            icon.image = 'http://chart.apis.google.com/chart?chst=d_map_pin_icon_withshadow&chld=home|FFFF00';
        }
        else
        {
            myletter = String.fromCharCode(64 + mycount);
            if (mymember == '1')
            {
                // member
                icon.image = 'http://chart.apis.google.com/chart?chst=d_map_xpin_letter_withshadow&chld=pin_star|' + myletter + '|daeafb|000000|FFFF00';
            }
            else
            {
                // non-member
                icon.image = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter_withshadow&chld= ' + myletter + '|daeafb|000000';
            }
        }
        // icon.iconSize = new GSize( 20, 34 );
        icon.iconAnchor = new GPoint(10, 30);
        icon.infoWindowAnchor = new GPoint(19, 5);
        var marker = new GMarker(point, icon);
        GEvent.addListener(marker, 'click', function() {
            marker.openInfoWindowHtml('<div class="centrez2CatOverBubble">' + html + '</div>');
        });

        return marker;
    },
    relatedMarks: function()
    {
        m = 1
        jQuery.each(locations, function(i, item)
        {

            html = '';

            //html += '<div id=\"bubbleDiv\">' + item.name + '</div><br/>';
            html += item.name + " (Latitude: " + item.lat + "<br/>" + "Longitude: " + item.lng + " )";
            var MarkerBounds = new GLatLngBounds();


            /*parse the coords*/

            var MarkerPoint = new GLatLng(parseFloat(item.lat), parseFloat(item.lng));
            
            geoSearchMap.addOverlay(g_map_search.createMarkers(MarkerPoint, html, m, '2'));
            MarkerBounds.extend(MarkerPoint);
            m = m + 1;

        });
    }

}

jQuery(function() {
    g_map_search.loadgeoSearchMap();
    g_map_search.updateOnSearch();
})
