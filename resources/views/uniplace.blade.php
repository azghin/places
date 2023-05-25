@extends('layouts.master')
@section('MapAPI')
<script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&language=fr&key=AIzaSyB4rQXALT8miSahBlXgjzGN4VP8gZAB1-s"  type="text/javascript"></script>
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div id="map" style="width: 100%;height: 500px;">
        
            </div>

        </div>
        <script async  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5k-sCaEODnX5vPF517RZEOwDjzFJrig&callback=initMap"></script>
        <h1>{{$data->title}}</h1>
        <p>{{$data->description}}</p>
        <div class="container">
          <h3>oldcomments</h3>
        </div>
        <div>
          <h3>new comments</h3>
          <form action="">
            <label for="avis">avis</label>
            <input type="number">
            <br>
            <label for="comment">comment</label>
            <input type="text">
          </form>
        </div>
        
    </div>
    



    <script>
        function initMap() {
      const coord = { lat: 35.778555682753414, lng: -5.808295979212141 };
      const map = new google.maps.Map(document.getElementById("map"), {
        scaleControl: true,
        center: coord,
        zoom: 20,
      });
      new google.maps.Marker({
        position:coord,
        map:map
      })

    }

    

    </script>

@endsection