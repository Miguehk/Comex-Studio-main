function iniciarMap(){
    var coord = {lat: 9.9356277,lng: -84.1545449};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}