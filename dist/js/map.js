function initialize(lat,lng) {
  var myLatlng = new google.maps.LatLng(lat,lng);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  };
  
  
  var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);
  
   var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'What is this place?'
  });   
}

setTimeout(function() {
    myLat = 25;
    myLong = -80;
    console.log("timeout");
    initialize(myLat,myLong);
},1000);