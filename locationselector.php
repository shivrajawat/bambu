 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title></title>
     <script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfaExFhABnh7I3-vTHJjA4TWqtYnMccKE&sensor=false">
</script>

<script type="text/javascript">
    var map;
    var boundaryPolygon;
    function initialize() {

        google.maps.Polygon.prototype.Contains = function (point) {
            // ray casting alogrithm http://rosettacode.org/wiki/Ray-casting_algorithm
            var crossings = 0,
            path = this.getPath();

            // for each edge
            for (var i = 0; i < path.getLength(); i++) {
                var a = path.getAt(i),
                j = i + 1;
                if (j >= path.getLength()) {
                    j = 0;
                }
                var b = path.getAt(j);
                if (rayCrossesSegment(point, a, b)) {
                    crossings++;
                }
            }

            // odd number of crossings?
            return (crossings % 2 == 1);

            function rayCrossesSegment(point, a, b) {
                var px = point.lng(),
                py = point.lat(),
                ax = a.lng(),
                ay = a.lat(),
                bx = b.lng(),
                by = b.lat();
                if (ay > by) {
                    ax = b.lng();
                    ay = b.lat();
                    bx = a.lng();
                    by = a.lat();
                }
                if (py == ay || py == by) py += 0.00000001;
                if ((py > by || py < ay) || (px > Math.max(ax, bx))) return false;
                if (px < Math.min(ax, bx)) return true;

                var red = (ax != bx) ? ((by - ay) / (bx - ax)) : Infinity;
                var blue = (ax != px) ? ((py - ay) / (px - ax)) : Infinity;
                return (blue >= red);
            }
        };


        var mapProp = {
            center: new google.maps.LatLng(37.684, -122.591),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("googleMap"), mapProp);



        google.maps.event.addListener(map, 'click', function (event) {
            if (boundaryPolygon!=null && boundaryPolygon.Contains(event.latLng)) {
                alert(event.latLng + " is inside the polygon");
            } else {
                alert(event.latLng + " is outside the polygon");
            }

        });
    }
   

    function btnCheckPointExistence_onclick() {
        var latitude = document.getElementById('txtLattitude').value;
        var longitude = document.getElementById('txtLongitude').value;
        var myPoint = new google.maps.LatLng(latitude, longitude);

        if (boundaryPolygon == null) {
            alert("No Polygon");
        }
        else {

            if (boundaryPolygon.Contains(myPoint)) {
                alert(myPoint + "is inside the polygon.");
            } else {
                alert(myPoint + "is outside the polygon.");
            }
        }
    }


    function drawPolygon() {
   
        initialize();
        var boundary = '-97.370989999999992 46.992124, -97.370986 46.992287, -97.404366 46.992346, -97.40961 46.992432, -97.409600000000012 46.993206, -97.409765 46.993213999999995, -97.410456 46.993027999999995, -97.410618 46.992433999999996, -97.41815 46.992459, -97.396357 46.977869, -97.39667 46.977866999999996, -97.397527 46.978437, -97.397883 46.978272, -97.397886 46.977869, -97.409083999999993 46.977903, -97.408824 46.962755, -97.393744 46.962813, -97.393713999999989 46.962308, -97.393385 46.96223, -97.393039 46.96236, -97.393025 46.962813999999995, -97.387739 46.962816, -97.387783 46.972404999999995, -97.387827 46.972705999999995, -97.38839 46.97385, -97.38850699999999 46.974388, -97.388545999999991 46.977838999999996, -97.357395 46.977753, -97.358465 46.978674, -97.358299 46.978932, -97.357631 46.979014, -97.357932999999989 46.979532, -97.357866 46.979744, -97.35763399999999 46.979887, -97.356097999999989 46.980121999999994, -97.355798 46.980382999999996, -97.35579899999999 46.980875999999995, -97.356401999999989 46.981840999999996, -97.357171999999991 46.982386999999996, -97.35807299999999 46.982313, -97.358240999999992 46.982431, -97.358108 46.982808, -97.358108 46.983089, -97.35837699999999 46.983208999999995, -97.358944 46.983197, -97.359646 46.982938, -97.360737 46.983602999999995, -97.360731 46.984094999999996, -97.360159 46.984359999999995, -97.360120999999992 46.984784999999995, -97.360186 46.984942, -97.359913999999989 46.9853, -97.359338999999991 46.985768, -97.359367999999989 46.986126, -97.360064 46.986048, -97.360362 46.986134, -97.360756999999992 46.986557999999995, -97.360884 46.987162, -97.360879 46.98761, -97.360575 46.987832999999995, -97.359294999999989 46.98793, -97.358824 46.988082999999996, -97.358820999999992 46.988329, -97.359450999999993 46.988457, -97.359681999999992 46.988613, -97.35974 46.989374, -97.36 46.990001, -97.360295999999991 46.990379999999995, -97.360193 46.990671, -97.360188999999991 46.991006999999996, -97.360585 46.991273, -97.361215 46.99131, -97.361444999999989 46.99151, -97.361351 46.992263, -97.367206 46.992273, -97.367217 46.987584, -97.367831 46.988023, -97.368158999999991 46.988174, -97.369042999999991 46.988375999999995, -97.369925 46.988848999999995, -97.370021 46.989002, -97.369508 46.989149, -97.36962 46.990027999999995, -97.369512 46.990314, -97.369994999999989 46.990925999999995, -97.369884 46.991344, -97.370989999999992 46.992124';
        var boundarydata = new Array();
        var latlongs = boundary.split(",");

        for (var i = 0; i < latlongs.length; i++) {
            latlong = latlongs[i].trim().split(" ");
            boundarydata[i] = new google.maps.LatLng(latlong[1], latlong[0]);
        }

        boundaryPolygon = new google.maps.Polygon({
            path: boundarydata,
            strokeColor: "#0000FF",
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: 'Red',
            fillOpacity: 0.4

        });

        google.maps.event.addListener(boundaryPolygon, 'click', function (event) {

            if (boundaryPolygon.Contains(event.latLng)) {
                alert(event.latLng + "is inside the polygon.");
            } else {
                alert(event.latLng + "is outside the polygon.");
            }

        });

        map.setCenter(boundarydata[0]);
        boundaryPolygon.setMap(map);
    }
</script>