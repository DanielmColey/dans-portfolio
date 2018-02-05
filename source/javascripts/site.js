// This is where it all goes :)
function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(40.5725193, -111.8985836),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}