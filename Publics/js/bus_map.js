
    window.mapControll = 0;
    
    $('#Map_con').click((e)=>{
        switch(window.mapControll){
            case 0:
                window.mapControll = 1;
                $('#Map_con').html('บันทึกหมุด');
                break;
            case 1:
                window.mapControll = 0;
                $('#Map_con').html('เพิ่มหมุด');
                break;
            
        }
        e.preventDefault();
    });
    
    function initMap() {
      var mapOptions = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {
          lat: 12.707434,
          lng: 101.14735169999994
        },
      });
      var geocoder = new google.maps.Geocoder();
      if(window.MapLat != undefined){
          var marker = new google.maps.Marker({
              position: {
                  lat: window.MapLat,
                  lng: window.MapLng
              },
              map: mapOptions
          });
          mapOptions.setCenter({
              lat: window.MapLat,
              lng: window.MapLng
          });
      }

      document.getElementById('submit').addEventListener('click', function() {
        geocodeAddress(geocoder, mapOptions);
      });

      google.maps.event.addListener(mapOptions, 'click', function(event) {
        //call function to create marker
        if (window.mapControll == 1) {
          if (marker) {
            marker.setMap(null);
            marker = null;
          }
          marker = createMarker(mapOptions, event.latLng, "name", "<b>Location</b><br>" + event.latLng);
          mapOptions.setCenter(event.latLng);
        }
      });

    }

    function createMarker(map, latlng, name, html) {
   
      var contentString = html;
      marker = new google.maps.Marker({
        position: latlng,
        map: map
      });
      
      $('#MapAddress_lat').val(latlng.lat());
      $('#MapAddress_lng').val(latlng.lng());
      
      google.maps.event.trigger(marker, 'click');
      
      return marker;
    }

    function geocodeAddress(geocoder, resultsMap) {
      var address = document.getElementById('address').value;
      geocoder.geocode({
        'address': address
      }, function(results, status) {
        if (status === 'OK') {
          resultsMap.setCenter(results[0].geometry.location);
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
    }