      function initMap() {
        var uluru = { lat: 45.4778498, lng: -73.4501589};
        var map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 5,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon: './images/map-marker.png'
        });
      }
