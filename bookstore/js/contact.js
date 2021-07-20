var map = '';
var center;
function initialize() {
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(46.218461, 16.983873),
        scrollwheel: false
    };

    map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);
    google.maps.event.addDomListener(map, 'idle', function() {
      calculateCenter();
    });

    google.maps.event.addDomListener(window, 'resize', function() {
      map.setCenter(center);
    });
}
function calculateCenter() {
    center = map.getCenter();
}
function loadGoogleMap(){
    var script = document.createElement('script');
    script.type = 'text/javascript';
	// use your own API key for Google Maps
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCcmSO46yBqhiGWluXQoJeZ7XmspLu72MM&v=3.exp&sensor=false&' + 'callback=initialize';
    document.body.appendChild(script);
} 

$(document).ready(function(){
    // Google Map
    loadGoogleMap();  
    
});