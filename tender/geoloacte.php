<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLatLong('mumbai')">Try It</button>

<p id="demo"></p>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6Be7PONfshO9x4RVMI6x3ldcU4ZvLy8s&sensor=false&callback=initMap" async defer ></script>
<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
function getLatLong(address) 
{
    var geocoder = new google.maps.Geocoder();
    var result = "";
    geocoder.geocode( { 'address': address, 'region': 'in' }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            result[lat] = results[0].geometry.location.lat();
            result[lng] = results[0].geometry.location.lng();
        } else {
            result = "Unable to find address: " + status;
        }
    });
    console.log(result);
}
</script>
</body>
</html>