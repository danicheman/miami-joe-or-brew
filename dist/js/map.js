var map;
var lastMarker;

function initialize(lat,lng) {
  var myLatlng = new google.maps.LatLng(lat,lng);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  };
  
  
  map = new google.maps.Map(document.getElementById('map'),
      mapOptions);
  
   lastMarker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'What is this place?'
  });   
}

function movePoint(hopLat, hopLng) {
    var myLatlng = new google.maps.LatLng(hopLat,hopLng);
    /*var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'What is this place?'
        });*/
    lastMarker.setPosition(myLatlng);

    map.panTo(lastMarker.getPosition());
    
}

setTimeout(function() {
    
    myLat = 25.796549;
    myLong = -80.275614;
    
    initialize(myLat,myLong);
},1000);

setTimeout(function() {
    myLat = 25.786005;
    myLong = -80.256189;
    console.log("timeout");
    movePoint(myLat,myLong);
},2000);