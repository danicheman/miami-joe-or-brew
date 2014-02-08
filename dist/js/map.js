var map;

function initialize(lat,lng) {
  var myLatlng = new google.maps.LatLng(lat,lng);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  };
  
  
  map = new google.maps.Map(document.getElementById('map'),
      mapOptions);
  
   var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'What is this place?'
  });   
}

function movePoint(hopLat, hopLng) {
    var pnt = new GLatLng(hopLat, hopLng);
    map.panTo(pnt);
}

setTimeout(function() {
    
    myLat = 25.796549;
    myLong = -80.275614;
    console.log("timeout");
    initialize(myLat,myLong);
},1000);

setTimeout(function() {
    myLat = 25.786005;
    myLong = -80.256189;
    console.log("timeout");
    movePoint(myLat,myLong);
},2000);