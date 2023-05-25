@extends('layouts.admin')
@section('MapAPI')
<script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initialize&language=fr&key=AIzaSyB4rQXALT8miSahBlXgjzGN4VP8gZAB1-s"  type="text/javascript"></script>
@endsection
@section('content')
<div class="m-3">
    <h1>ADD PLACE</h1>
    <form action="/newplace" method="POST" enctype="multipart/form-data">
        @csrf
<<<<<<< HEAD
        <br>
        <label for="title">title</label>
        <input type="text" class="form-control" name="title" id="title" >
        <br>
        <label for="latitude">latitude</label>
        <input type="text" class="form-control" name="latitude" id="latitude" >
        <br>
        <label for="longitude">longitude</label>
        <input type="text" class="form-control" name="longitude" id="longitude" >
        <br>
        <label for="description">description</label>
        <input type="text" class="form-control" name="description" id="description" >
        <br>
        <label for="image">Images</label>
        <input type="file" name="image" id="image" >
        <br>
=======
        {{-- <label for="id">id</label>
        <input type="text" name="id" id="id"> --}}
        
        <label for="titel">Titel</label>
            <input type="text" class="form-control" name="titel" id="titel">
        
        <label for="local">local</label>
        
            <input id="map-search" name="map-search" class="form-control" type="text" placeholder="Entrer votre adresse" >
        <label for="latitude">Lat</label>
            <input type="text" class="latitude form-control" id="latitude" name="latitude" >
        <label for="longitude">Long</label> 
            <input type="text" class="longitude form-control" id="longitude"  name="longitude" >
        <label for="country">City </label>
            <input type="text" class="reg-input-city form-control" placeholder="City" id="country" >

        <div id="map-canvas" class="m-3"></div>
        
        <label for="description">description</label>
        <input type="text" class="form-control" name="description" id="description">
        
        <label for="Images"></label>
>>>>>>> 0a8a4acbd8e42b75dbd197fe26e9030d173d6721
        <button type="submit" class="btn btn-primary">ADD place</button>
    </form>
</div>
    <style>
        #map-canvas {
            
            height: 438px;
            width: 100%;
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        input{
            margin-bottom: 10px;
        }
    </style>
<<<<<<< HEAD
    {{-- <script >
=======
    <script >
>>>>>>> 0a8a4acbd8e42b75dbd197fe26e9030d173d6721
        function initialize() {
       
           var mapOptions, map, marker, searchBox, city,
               infoWindow = '',
<<<<<<< HEAD
            //    addressEl = document.querySelector( '#map-search' ),
               latEl = document.querySelector( '.latitude' ),
               longEl = document.querySelector( '.longitude' ),
               element = document.getElementById( 'map-canvas' );
            //    city = document.querySelector( '.reg-input-city' );
           
           mapOptions = {
               // How far the maps zooms in.
               zoom: 10,
               // Current Lat and Long position of the pin/
               center: new google.maps.LatLng(35.778555682753414, -5.808295979212141), 
=======
               addressEl = document.querySelector( '#map-search' ),
               latEl = document.querySelector( '.latitude' ),
               longEl = document.querySelector( '.longitude' ),
               element = document.getElementById( 'map-canvas' );
               city = document.querySelector( '.reg-input-city' );
           
           mapOptions = {
               // How far the maps zooms in.
               zoom: 8,
               // Current Lat and Long position of the pin/
               center: new google.maps.LatLng(35.778555682753414, -5.808295979212141),
>>>>>>> 0a8a4acbd8e42b75dbd197fe26e9030d173d6721
               disableDefaultUI: false, // Disables the controls like zoom control on the map if set to true
               scrollWheel: true, // If set to false disables the scrolling on the map.
               draggable: true, // If set to false , you cannot move the map around.
               // mapTypeId: google.maps.MapTypeId.HYBRID, // If set to HYBRID its between sat and ROADMAP, Can be set to SATELLITE as well.
               // maxZoom: 11, // Wont allow you to zoom more than this
               // minZoom: 9  // Wont allow you to go more up.
       
           };
       
           /**
            * Creates the map using google function google.maps.Map() by passing the id of canvas and
            * mapOptions object that we just created above as its parameters.
            *
            */
           // Create an object map with the constructor function Map()
           map = new google.maps.Map( element, mapOptions ); // Till this like of code it loads up the map.
       
           /**
            * Creates the marker on the map
            *
            */
           const imageMark =
           "https://cdn-icons-png.flaticon.com/32/447/447031.png";
           marker = new google.maps.Marker({
               position: mapOptions.center,
               map: map,
               icon: imageMark,
               draggable: true
           });
       
           /**
            * Creates a search box
            */
           searchBox = new google.maps.places.SearchBox( addressEl );
       
           /**
            * When the place is changed on search box, it takes the marker to the searched location.
            */
           google.maps.event.addListener( searchBox, 'places_changed', function () {
               var places = searchBox.getPlaces(),
                   bounds = new google.maps.LatLngBounds(),
                   i, place, lat, long, resultArray,
                   addresss = places[0].formatted_address;
                   
       
               for( i = 0; place = places[i]; i++ ) {
                   bounds.extend( place.geometry.location );
                   marker.setPosition( place.geometry.location );  // Set marker position new.
               }
       
               map.fitBounds( bounds );  // Fit to the bound
               map.setZoom( 15 ); // This function sets the zoom to 15, meaning zooms to level 15.
               // console.log( map.getZoom() );
       
               lat = marker.getPosition().lat();
               long = marker.getPosition().lng();
               latEl.value = lat;
               longEl.value = long;
       
               resultArray =  places[0].address_components;
               
       
               // Get the city and set the city input value to the one selected
               for( var i = 0; i < resultArray.length; i++ ) {
                   if ( resultArray[ i ].types[0] && 'locality' === resultArray[ i ].types[0] ) {
                       citi = resultArray[ i ].long_name;
                       city.value = citi;
                   }
               }
       
               // Closes the previous info window if it already exists
               if ( infoWindow ) {
                   infoWindow.close();
                      }
               /**
                * Creates the info Window at the top of the marker
                */
               infoWindow = new google.maps.InfoWindow({
                   content: addresss
               });
       
               infoWindow.open( map, marker );
           } );
       
       
           /**
            * Finds the new position of the marker when the marker is dragged.
            */
           google.maps.event.addListener( marker, "dragend", function ( event ) {
               var lat, long, address, resultArray, citi;
       
               console.log( 'i am dragged' );
               lat = marker.getPosition().lat();
               long = marker.getPosition().lng();
       
               var geocoder = new google.maps.Geocoder();
               geocoder.geocode( { latLng: marker.getPosition() }, function ( result, status ) {
                   if ( 'OK' === status ) {  // This line can also be written like if ( status == google.maps.GeocoderStatus.OK ) {
                       address = result[0].formatted_address;
                       resultArray =  result[0].address_components;
       
                       // Get the city and set the city input value to the one selected
                       for( var i = 0; i < resultArray.length; i++ ) {
                           if ( resultArray[ i ].types[0] && 'locality' === resultArray[ i ].types[0] ) {
                               citi = resultArray[ i ].long_name;
                               console.log( citi );
                               city.value = citi;
                           }
                       }
                       addressEl.value = address;
                       latEl.value = lat;
                       longEl.value = long;
                       
                          
                           
                       
       
                   } else {
                       console.log( 'Geocode was not successful for the following reason: ' + status );
                   }
       
                   // Closes the previous info window if it already exists
                   if ( infoWindow ) {
                       infoWindow.close();
                   }
       
                   /**
                    * Creates the info Window at the top of the marker
                    */
                   infoWindow = new google.maps.InfoWindow({
                       content: address
                   });
       
                   infoWindow.open( map, marker );
               } );
           });
           
       
        }
<<<<<<< HEAD
    </script> --}}
=======
       </script>
>>>>>>> 0a8a4acbd8e42b75dbd197fe26e9030d173d6721
@endsection
